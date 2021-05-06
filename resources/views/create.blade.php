@extends('layouts.app')

@section('content')
<h1>Create new Todo</h1>
<form method="POST" action="/todos">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title')}}">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" id="due" name="due" placeholder="Enter due" value="{{ old('due')}}">
        </div>
         <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" rows="10" name="content" id="content" placeholder="Enter Content">{{ old('content')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </div>
  </form>
@endsection