@extends('pdfs.base')

@section('content')
    <h1>Mails List</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>To</th>
            <th>Subject</th>
            <th>From</th>
            <th>From Email</th>
            <th>Body</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $mail)
            <tr>
                <td>{{ $mail->id }}</td>
                <td>{{ $mail->to }}</td>
                <td>{{ $mail->subject->desc }}</td>
                <td>{{ $mail->from_name }}</td>
                <td>{{ $mail->from_email }}</td>
                <td>{{ $mail->body }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
