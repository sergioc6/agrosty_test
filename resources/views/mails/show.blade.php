@extends('base.index')

@section('title', 'Mails')
@section('subtitle', 'View mail details')

@section('content')

    <div class="container">

        <table class="table table-no-border">
            <tbody>
            <tr>
                <td>Id:</td>
                <td>{{$mail->id}}</td>
            </tr>

            <tr>
                <td>Subject:</td>
                <td>{{$mail->subject}}</td>
            </tr>

            <tr>
                <td>Body:</td>
                <td>{{ $mail->body }}</td>
            </tr>
            </tbody>
        </table>

        <a href="{{ route('mails.index') }}" class="btn btn-default">Go Back</a>

    </div>

@endsection
