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
      <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning"> Edit</a></td>
      @if(Auth::id())
      <td>
        <form action="{{route('categories.destroy', $category->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form> 
      </td>
      @else
          <td> <p class="text-danger">Please login to use this functionality</p> </td> 
            @endif
    </tr>
    @endforeach
  </tbody>

 </table>

@endsection