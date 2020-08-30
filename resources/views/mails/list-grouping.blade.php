@extends('base.index')

@section('title', 'Mails')
@section('subtitle', 'List of mails grouping')

@section('content')

    <div class="container">

        <a href="{{ route('mails.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Go back</a>
        <br>
        <p class="font-weight-bold">Totales: {{ $totals }}</p>

        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Count</th>
                    <th scope="col">Percentage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mailsList as $mail)
                    <tr>
                        <th scope="row">{{ $mail->id }}</th>
                        <td>{{ $mail->desc }}</td>
                        <td>{{ $mail->cant }}</td>
                        <td>{{ $mail->cant/$totals*100 }}%</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
