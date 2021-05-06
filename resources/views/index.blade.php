@extends('layouts.app')


@section('content')
    <h1>Todos</h1>

    @if (count($todos)>0)
        @foreach ($todos as $todo)
          <div class="card mt-2">
            <div class="card-header" style="background-color: #a6a6a6">
              {{ $todo->created_at }}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $todo->title }}</h5>
              <p class="card-text">Due: {{ $todo->due }}</p>
              <a href="todos/{{ $todo->id }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        @endforeach
    @endif
@endsection