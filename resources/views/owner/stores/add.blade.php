@extends('layouts.products')
@section('content')

<div class="col-md-12">

<div class="jumbotron bg-primary text-white" style="background-image: url(http://www.jeffsmeats.com/Grocery-Products-header.jpg)">
    <h2>Add New Store</h2>
    <p>Must Fill All Field Required:</p>
    <a href="{{route('stores.index')}}" class="btn btn-light" >Go Back to All Products </a>

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


{!!Form::open(['method'=>'POST','action'=>'StoreController@store','class'=>'img-thumbnail','files'=>true]) !!}
<div class='form-group'>
{!! Form::label('name', 'Name of Store:') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('image', 'Upload Store Image:') !!}<br>
{!! Form::file('image',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('address', 'Address of Store:') !!}
{!! Form::text('address',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::submit('Add New Store',['class'=>'btn btn-outline-primary']) !!}
</div>
{!! Form::close() !!}
    
</div>  

@endsection