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
                <td>{{$mail->subject->desc}}</td>
            </tr>

            <tr>
                <td>Body:</td>
                <td>{{ $mail->body }}</td>
            </tr>
            </tbody>
        </table>

        <a href="{{ route('mails.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Go back</a>

    </div>

@endsection
