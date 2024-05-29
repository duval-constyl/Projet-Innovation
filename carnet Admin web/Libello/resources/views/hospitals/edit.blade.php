<!-- resources/views/hospitals/edit.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Edit Hospital</h1>

<form action="{{ route('hospitals.update', $hospital->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $hospital->name }}" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="{{ $hospital->address }}" required>

    <!-- Ajoutez d'autres champs si nécessaire -->

    <button type="submit">Update</button>
</form>

<a href="{{ route('hospitals.index') }}">Back to Hospitals</a>

@endsection
