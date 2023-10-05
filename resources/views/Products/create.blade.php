@extends('layouts.app')
@section('content')
<h1 class="ms-5 mb-5">Create New Product</h1>
<div class="container">
<form method="post" action="{{route('product.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input  class="form-control" name="image">
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input  class="form-control" name="description">
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input  class="form-control" name="price">
  </div>
  <div class="mb-3">
    <label  class="form-label">Rating</label>
    <input  class="form-control" name="rating" >
  </div>
  <div class="mb-3">
    <label  class="form-label">DiscountPercentage</label>
    <input  class="form-control" name="DiscountPercentage" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Stock</label>
    <input  class="form-control" name="stock">
  </div>
  <div class="mb-3">
    <label  class="form-label">Brand</label>
    <input  class="form-control" name="brand" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Category</label>
    <input  class="form-control" name="category" >
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection