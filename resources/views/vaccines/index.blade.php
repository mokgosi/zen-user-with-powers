@extends('layouts.master')

@section('content')
    
    <h1 class="mb-3">Vaccines List</h1>

    <div class="bg-light p-4 rounded">
        <h2>Vaccines</h2>
        <div class="lead">
            <a href="{{ route('vaccines.create') }}" class="btn btn-primary btn-sm float-right">Add Vaccine</a>
        </div>
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        <table class="table table-bordered">
          <tr>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($vaccines as $key => $vaccine)
            <tr>
                <td>{{ $vaccine->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('vaccines.show', $vaccine->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('vaccines.edit', $vaccine->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['vaccines.destroy', $vaccine->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>
        <div class="d-flex">
            {!! $vaccine->links() !!}
        </div>
    </div>
@endsection