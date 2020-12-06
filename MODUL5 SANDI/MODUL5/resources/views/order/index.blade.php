@extends('layout')
@section('content')
    @if($product->isNotEmpty())
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
    
    @foreach ($product as $orders)
        <div class="card col-md-4 pb-2 mx-2">
            
            <div class="card-body">
                <img class="card-img-top" src="/product/{{ $orders->img_path }}" alt="Card image cap" style="max-height:400px">
                <h4 class="card-title mt-2">{{ $orders->name }}</h4>
                <p class="card-text">{{ $orders->description }}</p>
            </div>
            <div class="card-body"><h4>${{ number_format((float)$orders->price, 2, '.', '') }}</h4></div>
            <div class=" mx-auto">
            <form action="" method="get">
            @csrf
            <a class="btn btn-success" href="{{ route('products.show',$orders->id) }}">Order Now</a>
            </form>
            </div>
        </div>
            <div class="pr-2"></div>
        @endforeach
        </div>
    
    @else
    <div class="d-flex justify-content-center">
    <p class="mt-5">There is no data.</p>
    </div>
    <div class="d-flex justify-content-center">
    <a  class="btn btn-dark" href="{{ route('products.create')}}">Add Product</a> 
    </div>
   
    
    @endif
@endsection