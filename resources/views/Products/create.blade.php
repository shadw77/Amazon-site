@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
<h1 class="ms-5 mb-5">Create New Product</h1>
<div class="container">
<form method="post" action="{{route('product.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    @error('name')
    <div class="text-danger fw-bold">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input  class="form-control" name="image" value="{{ old('image') }}">
    @error('image')
    <div class="text-danger fw-bold">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input  class="form-control" name="description" value="{{ old('description') }}">
    @error('description')
    <div class="text-danger fw-bold">{{$message}}</div>
    @enderror
  </div>
 
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input  class="form-control" name="price" value="{{ old('price') }}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Rating</label>
    <input  class="form-control" name="rating" value="{{ old('rating') }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">DiscountPercentage</label>
    <input  class="form-control" name="discountPercentage" value="{{ old('discountPercentage') }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Stock</label>
    <input  class="form-control" name="stock" value="{{ old('stock') }}">
  </div>
  <div class="mb-3">
    <label  class="form-label">Brand</label>
    <input  class="form-control" name="brand" value="{{ old('brand') }}">
  </div>
 
  <div class="mb-3">
    <label for="" class="form-label">Category</label>
  <select class="form-select" name="category_id">
    <option selected disabled value="">Open this select menu</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection