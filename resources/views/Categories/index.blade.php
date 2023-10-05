@extends('layouts.app')
@section('content')
<a href="{{route('categories.create')}}" class="btn btn-success">Add New Category </a>
 <h1>All Categories from db</h1>
 <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Show</th>
      <th>Edit</th>
      <th>Delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td><a href="{{route('categories.show', $category->id)}}" class="btn btn-info">Show </a></td>
      <td><a href="" class="btn btn-warning"> Edit</a></td>
      <td><a href="" class="btn btn-danger"> Delete</a></td>
    </tr>
    @endforeach
  </tbody>

 </table>

@endsection