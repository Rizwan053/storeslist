@extends('layouts.products')
@section('content')

<div class="col-md-12">

<div class="jumbotron bg-primary text-white" style="background-image: url(/img/{{$product->image}});">
    <h2>Edit Product</h2>
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

@if(session('update'))
<div class = "alert alert-info">
      <ul class="list-group">
            <li>Product Updated Succesfully.</li>
      </ul>
   </div>
@endif


{!!Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',$product->id],'files'=>true]) !!}
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
{!! Form::submit('Edit Product',['class'=>'form-control btn btn-outline-primary']) !!}
</div>
{!! Form::close() !!}
    
</div>  

@endsection
