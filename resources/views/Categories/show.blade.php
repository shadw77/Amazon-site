@extends('layouts.app')
@section('content')
 <h1>Category Details of {{$category->name}}</h1>
 <div class='card mb-3'>
            <div class='card-body'>
            <div class='body'>
            <table class='table table-dark'>

            <tr><th>Logo</th><th>    
                    <img src="{{asset('images/' . $category->logo)}}" class='w-25 rounded mx-auto'>
            </th></tr>
            <tr><th>Name</th><th><h5 class='card-title'>{{$category->name}}</h5></th></tr>
            <tr><th>Created At</th><th><p class='card-text'> {{$category->created_at}}</p></th></tr>

            <tr><th>Updated At</th><th><p class='card-text'> {{$category->updated_at}}</p></th></tr>

            </table>
            <a href="{{route('categories.index')}}" class="btn btn-primary">Back to all Categories</a>
            <h1>Products in this category</h1>
            <ol>
                @foreach($category->products as $prd)
                  <li> <a href="{{route('products.show', $prd->id)}}"> {{$prd->name}}</a> </li>
                @endforeach
            </ol>
            </div>
            </div>
        </div>
  

@endsection