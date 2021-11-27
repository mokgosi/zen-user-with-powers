@extends('layouts.master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Vaccine</h2>
        <div class="lead">
            Edit Vaccine.
        </div>
        <div class="container mt-4">
            <form method="POST" action="{{ route('vaccines.update', $vaccine->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Name</label>
                    <input value="{{ $vaccine->name }}" type="text" class="form-control" name="name" placeholder="Name" required />
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ $vaccine->description }}" type="text" class="form-control" name="description" placeholder="Description" required />
                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('vaccines.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>
    </div>
@endsection