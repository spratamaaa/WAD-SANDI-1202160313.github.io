@extends('layout')
@section('content')
    @if($products->isNotEmpty())
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
                <h2 class="text-center">List Product</h2>
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ route('products.create') }}"> Add Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <p hidden>{{$i=0}}</p>
    <table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($product as $product)
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>${{ number_format((float)$product->price, 2, '.', '') }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
    @else
    <div class="d-flex justify-content-center">
    <p class="mt-5">There is no data.</p>
    </div>
    <div class="d-flex justify-content-center">
    <a  class="btn btn-dark" href="{{ route('products.create')}}">Add Product</a> 
    </div>
   
    
    @endif
@endsection