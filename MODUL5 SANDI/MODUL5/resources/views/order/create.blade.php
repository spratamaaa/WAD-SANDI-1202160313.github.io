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
   
    <div class="card-group mt-3 mx-auto pb-4">
        <div class="card col-md-4 pb-2">
            
            <div class="card-body">
                <img class="card-img-top" src="/product/{{ $product->img_path }}" alt="Card image cap" style="max-width:300px">
                <h4 class="card-title mt-2">{{ $product->name }}</h4>
                <p class="card-text">{{ $product->description }}</p>
            </div>
            <div class="card-body"><h4>${{ number_format((float)$product->price, 2, '.', '') }}</h4></div>
            <div class=" mx-auto">
            </div>
        </div>


@endsection