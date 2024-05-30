@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Prenez rendez-vous</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/appointment" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom Complet</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="appointment_date">Date de rendez-vous</label>
                <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Prenez rendez-vous</button>
        </form>
    </div>
@endsection
