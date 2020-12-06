@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12">
            <h2 class="text-center">Input Product</h2>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <div class="form-inline">
                <input type="name" name="price" class="col-1 form-control" value="$USD" disabled>
                <input type="number" name="price" class="col-11 form-control" placeholder="Price">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stock</strong>
                <input type="number" name="stock" class="col-4 form-control" placeholder="Stock">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image file input</strong><br>
                <input type="file" name="img_path" placeholder="Choose image" id="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" class="btn btn-lg btn-dark">Submit</button>
        </div>
    </div>
   
</form>
@endsection