<?php


namespace App\Exports;


use App\Models\Mail;
use Maatwebsite\Excel\Concerns\FromCollection;

class MailsExport implements FromCollection
{

    public function collection()
    {
        return Mail::all();
    }

}
