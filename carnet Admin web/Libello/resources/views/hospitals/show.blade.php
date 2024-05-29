<!-- resources/views/hospitals/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $hospital->name }}</h1>

    <p>Adresse : {{ $hospital->address }}</p>
    <p>Téléphone : {{ $hospital->phone }}</p>
    <p>Email : {{ $hospital->email }}</p>

    <a href="{{ route('hospitals.index') }}">Retour à la liste des hôpitaux</a>
@endsection
