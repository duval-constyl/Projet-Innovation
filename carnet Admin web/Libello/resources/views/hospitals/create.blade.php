<!-- resources/views/hospitals/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Create Hospital</h1>

<form action="{{ route('hospitals.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <!-- Ajoutez d'autres champs si nécessaire -->

    <button type="submit">Create</button>
</form>

<a href="{{ route('hospitals.index') }}">Back to Hospitals</a>
@endsection
