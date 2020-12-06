@extends('layout')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
                <h2 class="text-center">Order</h2>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-md-8 d-flex mx-auto py-4 bg-white border">
    <div class=" mr-4">
    <img class="" src="/product/{{ $product->img_path }}" alt="Card image cap" style="max-width:300px">
    </div>
    <div class="col-md-5">
    <h4 class="card-title mt-2">{{ $product->name }}</h4>
                <p class="card-text">{{ $product->description }}</p>
    </div>
    </div>

   
    <form action="{{ route('order.create') }}" method="POST" >
    @csrf
    <div class="col-md-8 mx-auto mt-3 pt-2 bg-white border">
        <h4 class="text-center">Buyer Information</h4>
        <div class="py-2">
        <input type="number" name="product_id" id="product_id" value="{{ $product->id }}" hidden>
        <label for="">Name</label><br>
        <input type="text" name="buyer_name" class="col-11 form-control" id="product_id" placeholder="Name"><br>
        <label for="">Contact</label><br>
        <input type="text" name="buyer_contact" class="col-11 form-control" id="product_id" placeholder="Contact"><br>
        <label for="">Quantity</label><br>
        <input type="text" name="quantity" class="col-4 form-control" id="product_id" placeholder="Quantity">
        <button type="submit" class="btn btn-md btn-success mt-2">Submit</button>
        </div>
        </div>
    </div>
   
</form>
  

@endsection