@extends('layouts.app')
@section('content')
 <h1>Category Details of {{$category->name}}</h1>
 <div class='card mb-3'>
            <div class='card-body'>
            <div class='body'>
            <table class='table table-dark'>
            <tr><th>Logo</th><th><p class='card-text'> {{$category->logo}}</p></th></tr>
            <tr><th>Name</th><th><h5 class='card-title'>{{$category->name}}</h5></th></tr>
            <tr><th>Created At</th><th><p class='card-text'> {{$category->created_at}}</p></th></tr>

            <tr><th>Updated At</th><th><p class='card-text'> {{$category->updated_at}}</p></th></tr>

            </table>
            <a href="{{route('categories.index')}}" class="btn btn-primary">Back to all Categories</a>
         
            </div>
            </div>
        </div>
  

@endsection