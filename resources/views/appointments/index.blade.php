@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Rendez-vous</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom Complet</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date de rendez-vous</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
