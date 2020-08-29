@extends('base.index')

@section('title', 'Mails')
@section('subtitle', 'Edit mail')

@section('content')

    <div class="container">

        <form action="{{ route('mails.update', ['mail' => $mail]) }}" method="POST">
            @method('PUT')

            @include('mails.shared.inputs', ['mail' => $mail])

        </form>

    </div>

@endsection
