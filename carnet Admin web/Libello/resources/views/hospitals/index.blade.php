<!-- resources/views/hospitals/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Hospitals</h1>

<a href="{{ route('hospitals.create') }}" >Create Hospital</a>
@php
  $hospitals=App\Models\Hospital::all();
@endphp
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hospitals as $hospital)
            <tr>
                <td>{{ $hospital->name }}</td>
                <td>{{ $hospital->address }}</td>
                <td>
                    <a class="button" href="{{ route('hospitals.edit', $hospital->id) }}">Edit</a>
                    <br><br>
                    <form action="{{ route('hospitals.destroy', $hospital->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection('content')
