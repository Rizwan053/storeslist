@extends('layouts.products')
@section('styles')

	<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">



@endsection

@section('content')
<div class="col-md-12">

<div class="jumbotron bg-primary text-white" style="background-image:url(https://www.heartlandpaymentsystems.com/-/media/heartland/components/hero/grocery-header-test-with-gray-box.png); opacity:">
<h1 class="title" >Products</h1>
<p class="category">Products in Your Store:</p>
<a href="{{route('products.create')}}" class="btn btn-light" style="box-shadow:3px 3px 4px black" >Add New Product  </a>

</div>





@if(session('delete'))
<div class = "alert alert-danger">
      <ul class="list-group">
            <li>Product Deleted Succesfully.</li>
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



                        <div class="card">
                           
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped" style="background-image: url(http://thaymanhinhlenovo.info/wp-content/uploads/2017/12/chalkboard-wallpaper-chalkboard-wallpaper-4-chalkboard-chalkboard-wallpaper-amazon-chalkboard-wallpaper-vs-paint.jpg); opacity: 0.9">
                                    <thead class='text-white'>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Image</th>
                                    	<th>Price</th>
                                    	<th>Available Quantity</th>
                                    	<th>Added On</th>
                                    	<th>Edit</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
@foreach($products as $pro)
                                        <tr class="text-white" >
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->name}}</td>
                                        <td><img height=50 src="/img/{{$pro->image}}" alt=""></td>
                                        <td>Rs {{$pro->price}}</td>
                                        <td>{{$pro->quantity}}</td>
                                        <td>{{$pro->created_at->format('d/M/Y')}}</td>
                                        <td><a href="{{route('products.show',$pro->id)}} " class="btn btn-sm btn-info">Edit</a></td>
                                        <td>{!!Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$pro->id]]) !!}
                                       
                                        <div class='form-group'>
                                        {!! Form::submit('Delete',['class'=>'form-control btn btn-sm btn-danger']) !!}
                                        </div>
                                        {!! Form::close() !!}</td>
                                        </tr>

                                        
@endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>  

@endsection

@section('script')
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
@endsection