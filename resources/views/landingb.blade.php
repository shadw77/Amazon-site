@extends('layouts.app')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($products as $product)
  <div class="col">
    <div class="card w-100 " style="height:400px">
      <img src="{{asset('images/'.$product['thumbnail'])}}" class="card-img-top img-fluid h-50" heigh="200" >
      <div class="card-body">
        <div class="row">
            <div class="col">
                        <h5 class="card-title">{{$product['title']}}</h5>
            </div>
            <div class="col">
                        <h5 class="card-title text-danger">{{$product['price']}} EGP</h5>

            </div>

        </div>

        <p class="card-text"> {{$product['description']}}</p>
        <a href="{{route('land.getProduct', $product['id'])}}" class="btn btn-info">See More Details</a> </div>
    </div>
  </div>
  @endforeach

</div>
@endsection

