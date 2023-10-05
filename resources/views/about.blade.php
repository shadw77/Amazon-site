@extends('layouts.app')
@section('content')

    <div class="container text-center">
        <h1 class="fw-bold">Know us..</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis atque sint numquam voluptatibus enim quidem perspiciatis dolorem libero dolore harum.lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores possimus perferendis vel repellendus doloremque fuga at explicabo. Temporibus, ratione doloremque.</p>
    </div>
    <div class="container">
    <div class="row">
    @foreach($about_data as $emp)
 <div class="col">


<div class="card h-75" style="width: 18rem;">

  <img src="{{$emp['img']}}" class="card-img-top img-fluid h-75" alt="...">
  <div class="card-body text-center fw-bold fs-5">
    <p class="card-text">{{$emp['name']}}</p>
    <p class="card-text">{{$emp['job']}}</p>

  </div>
 </div>
</div>


@endforeach
</div>
 </div>
@endsection


