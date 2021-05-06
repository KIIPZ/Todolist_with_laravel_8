@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary mt-2">Go back</a>
    <h3>{{ $todo->title }}</h3>
    <div class="badge bg-danger">Due: {{ $todo->due }}</div>
    <div class="card mt-2">
        <div class="card-header" style="background-color: #a6a6a6">
          Created: {{ $todo->created_at }}
        </div>
        <div class="card-body">
            <p class="">{{ $todo->content }}</p>
            <form action="/todos/{{ $todo->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2 float-end">Delete</button>
            </form>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
        </div>
    </div>
@endsection