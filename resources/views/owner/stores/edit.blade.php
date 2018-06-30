@extends('layouts.products')
@section('content')

<div class="col-md-12">

<div class="jumbotron bg-primary text-white" style="background-image: url(/str_img/{{$stores->image}})">
    <h2>Edit Store</h2>
    <p>Must Fill All Field Required:</p>
    <a href="{{route('stores.index')}}" class="btn btn-light" >Go Back to All Stores </a>

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


{!!Form::model($stores,['method'=>'PATCH','action'=>['StoreController@update',$stores->id],'class'=>'img-thumbnail','files'=>true]) !!}
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
{!! Form::submit('Update Store',['class'=>'btn btn-outline-primary']) !!}
</div>
{!! Form::close() !!}
    
</div>  

@endsection