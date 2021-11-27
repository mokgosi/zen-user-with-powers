@extends('layouts.master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show Vaccine</h2>
        <div class="lead"></div>
        <div class="container mt-4">
            <div>
                Name: {{ $vaccine->name }}
            </div>
            <div>
                Description: {{ $vaccine->description }}
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('vaccines.edit', $vaccine->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('vaccines.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection