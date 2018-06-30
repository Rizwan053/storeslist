@extends('layouts.products')
@section('styles')

	<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">



@endsection

@section('content')
<div class="col-md-12">

<div class="jumbotron bg-primary text-white" style="background-image:url(https://www.heartlandpaymentsystems.com/-/media/heartland/components/hero/grocery-header-test-with-gray-box.png); opacity:">
<h1 class="title" >Stores</h1>
<p class="category">Your Stores:</p>
<a href="{{route('stores.create')}}" class="btn btn-light" style="box-shadow:3px 3px 4px black" >Add New Store  </a>

</div>





@if(session('delete'))
<div class = "alert alert-danger">
      <ul class="list-group">
            <li>Store Deleted Succesfully.</li>
      </ul>
   </div>
@endif

@if(session('update'))
<div class = "alert alert-info">
      <ul class="list-group">
            <li>Store Updated Succesfully.</li>
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
                                    	<th>Address</th>
                                    
                                    	<th>Added On</th>
                                    	<th>Edit</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
@foreach($stores as $store)
                                        <tr class="text-white" >
                                        <td>{{$store->id}}</td>
                                        <td>{{$store->name}}</td>
                                        <td><img height=50 src="/str_img/{{$store->image}}" alt=""></td>
                                        <td>{{$store->address}}</td>
                                        <td>{{$store->created_at->format('d/M/Y')}}</td>
                                        <td><a href="{{route('stores.edit',$store->id)}} " class="btn btn-sm btn-info">Edit</a></td>
                                        <td>{!!Form::open(['method'=>'DELETE','action'=>['StoreController@destroy',$store->id]]) !!}
                                       
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