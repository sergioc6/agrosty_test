<?php

namespace App\Http\Controllers;

use App\Exports\MailsExport;
use App\Http\Requests\MailPost;
use App\Mail\AgrostyMail;
use App\Models\Mail;
use App\Models\Subject;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qb = Mail::with('subject');

        if (isset($request->orderDesc)) {
            $qb->orderBy('created_at', 'DESC');
        }
        if (isset($request->orderAsc)) {
            $qb->orderBy('created_at', 'ASC');
        }

        $mails = $qb->paginate();

        return view('mails.index',
            ['mails' => $mails]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('mails.create', ['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MailPost $request)
    {
        $data = $request->validated();
        $data['to'] = env('MAIL_TO_ADDRESS', 'other_company@agrosty.com');
        $mail = Mail::create($data);

        \Illuminate\Support\Facades\Mail::to($mail->to)
            ->send(new AgrostyMail($mail));

        return redirect()->action('MailController@index');
    }

    /**
     * Display the specified resource.
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        return view('mails.show', ['mail' => $mail]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        $subjects = Subject::all();
        return view('mails.edit', ['mail' => $mail, 'subjects' => $subjects]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        $data = $request->all();
        $mail->fill($data);
        $mail->save();

        return redirect()->action('MailController@index');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Mail $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();

        return redirect()->action('MailController@index');
    }

    /**
     * @param Request $request
     * @param $mailId
     */
    public function sendEmail(Request $request, $mailId)
    {
        $mail = Mail::findOrFail($mailId);

        \Illuminate\Support\Facades\Mail::to($mail->to)
            ->send(new AgrostyMail($mail));

        if ($request->is('api/*')) {
            return response()->json([
                'status' => 'success',
                'message' => 'Mail sended!',
                'data' => $mail
            ], 200);
        } else {
            return redirect()->action('MailController@index');
        }
    }

    /**
     * @param Request $request
     */
    public function listGroup()
    {
        $totals = Mail::count();
        $mailsList = DB::select("
            SELECT s.id, s.desc, count(m.id) as cant
            FROM subjects s
            LEFT JOIN mails m on s.id = m.subject_id
            GROUP BY s.id, s.desc
        ");

        return view('mails.list-grouping',
            ['mailsList' => $mailsList,
                'totals' => $totals
            ]);
    }

    /**
     * @param Request $request
     */
    public function getExcel(Request $request)
    {
        return Excel::download(new MailsExport(), 'mails.xlsx');
    }

    /**
     * @param Request $request
     */
    public function getPdf(Request $request)
    {
        $data = Mail::with('subject')->limit(100)->get();
        $pdf = PDF::loadView('pdfs.mails', ['data'=>$data]);
        //$pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('mails.pdf');
    }
}
