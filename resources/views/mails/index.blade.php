@extends('base.index')

@section('title', 'Mails')
@section('subtitle', 'List of mails')

@section('content')

    @include('mails.shared.actions')

    @include('mails.shared.messages')

    <div style="margin-top: 5px;">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">To</th>
                <th scope="col">Subject</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mails as $mail)
                <tr>
                    <td scope="row" class="id">{{ $mail->id }}</td>
                    <td>{{ $mail->to }}</td>
                    <td>{{ $mail->subject->desc }}</td>
                    <td>{{ $mail->created_at->format('d-m-Y') }}</td>
                    <td>@include('mails.shared.actions-list', ['id' => $mail->id])</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $mails->links() }}

    </div>

    @include('mails.shared.modal-send')

@endsection
