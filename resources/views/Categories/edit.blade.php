@extends('layouts.app')
@section('content')
<h1 class="ms-5 mb-5">Edit Category</h1>
<div class="container">
<form method="post" action="{{route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Category Name</label>
    <input type="text" class="form-control" name="name" value="{{$category->name}}" >
    @error('name')
    <div class="text-danger fw-bold">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label  class="form-label">Logo</label>
    <input  class="form-control" name="logo" value="{{$category->logo}}" >
    @error('logo')
    <div class="text-danger fw-bold">{{$message}}</div>
    @enderror
  </div>
 
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection