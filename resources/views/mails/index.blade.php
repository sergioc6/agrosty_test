@extends('base.index')

@section('title', 'Mails')
@section('subtitle', 'List of mails')

@section('content')

    <div class="container">
        @include('mails.actions')

        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">To</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mails as $mail)
                    <tr>
                        <th scope="row">{{ $mail->id }}</th>
                        <td>{{ $mail->to }}</td>
                        <td>{{ $mail->subject }}</td>
                        <td>@include('mails.actions-list', ['id' => $mail->id])</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{ $mails->links() }}

    </div>

@endsection
