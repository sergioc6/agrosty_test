@extends('base.index')

@section('title', 'Mails')
@section('subtitle', 'Create mail')

@section('content')

    <div class="container">

        <form action="{{ route('mails.store') }}" method="POST">

            @include('mails.shared.inputs')

        </form>

    </div>

@endsection
