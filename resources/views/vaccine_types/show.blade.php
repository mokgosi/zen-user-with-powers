@extends('layouts.master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show</h2>
        <div class="lead"></div>
        <div class="container mt-4">
            <div>
                Name: {{ $vaccine->title }}
            </div>
            <div>
                Description: {{ $vaccine->description }}
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('vaccine.types.edit', $vaccine->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('vaccine.types.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection