@extends('layouts.products')
@section('content')

<div class="col-md-12">

<div class="jumbotron bg-primary text-white" style="background-image: url(http://www.jeffsmeats.com/Grocery-Products-header.jpg)">
    <h2>Add New Product</h2>
    <p>Must Fill All Field Required:</p>
    <a href="{{route('products.index')}}" class="btn btn-light" >Go Back to All Products </a>

</div>
@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
         @endforeach
      </ul>
   </div>
@endif
@if (session('order'))
   <div class = "alert alert-success">
     <p class="list-group">Store Added Succesfully! Now Add Some Product to Your New Store</p>
   </div>
@endif


{!!Form::open(['method'=>'POST','action'=>'ProductController@store','files'=>true]) !!}
<div class='form-group'>
{!! Form::label('name', 'Name of Product:') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('store_id', 'Store Name:') !!}
{!! Form::select('store_id',[''=>'Choose Store']+$store,null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('image', 'Upload Product Image:') !!}
{!! Form::file('image',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('price', 'Price:') !!}
{!! Form::number('price',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('quantity', 'Quantity Available:') !!}
{!! Form::number('quantity',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::submit('Add New  Product',['class'=>'form-control btn btn-outline-primary']) !!}
</div>
{!! Form::close() !!}
    
</div>  

@endsection