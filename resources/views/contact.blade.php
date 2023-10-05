@extends('layouts.app')
@section('content')
<h1 class="fw-bold my-5 text-center">Contact us</h1>

<div class="container ">
    <h3>Reach out to us!</h3>
    <div class="row ">
        <div class="col-8  ">
        <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">@example.com</span>
</div>

<div class="mb-3">
  <label for="basic-url" class="form-label">Your vanity URL</label>
  <div class="input-group">
    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
  </div>
  <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="Server" aria-label="Server">
</div>

<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary mt-3 ">SUBMIT</button>
        </div>
</div>


        <div class="col-4">
        <h3>Customer care</h3>
        <p>Not sure where to start? Need help adding that extra mojo to your landing page? Just visit our <span>help center</span> or get in touch with us.</p>
        <div class="row">

        <div class="col-4">

        <img class="rounded-circle" width="100" height="100" style="object-fit:cover" src="https://image.cnbcfm.com/api/v1/image/107228941-1682027700192-_DSC5658.jpg?v=1682427601&w=1920&h=1080" alt="">
        </div>   
            <div class="col-8">

        <h5 class="fw-bold" >Mohamed</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, qui!</p>
          </div>
           </div> 
           <div class="row mt-5">

            <div class="col-4">
            <img class="rounded-circle" width="100" height="100" style="object-fit:cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt0G_FKyXHs_xq7xV5rYYdHDmaNUfh8RyAGhGL_dXlRBBeniF34Rq3tCYWu63XKk8gthI&usqp=CAU" alt="">

            </div>
            <div class="col-8">

            <h5 class="fw-bold" >Osama</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, obcaecati!</p>
</div>
           </div>
        </div>

    </div>

</div>
@endsection
