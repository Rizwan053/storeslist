<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>StoresList.com </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">




	<!-- Stylesheets -->

    {{-- <link href="/css/bootstrap.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


	<link href="/css/swiper.css" rel="stylesheet">

	<link href="/css/ionicons.css" rel="stylesheet">


	<link href="front-page-category/css/styles.css" rel="stylesheet">

    <link href="front-page-category/css/responsive.css" rel="stylesheet">
   <style>
  
   </style>
    @yield('styles')

</head>
<body class="alert-dark ">

<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-store"></i> Stores List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

    </div>
    <div class="container-fluid img-thumbnail">
<br>

    <div class="row alert-dark">
        <div class="col-md-2">


<div class="list-group" id="myList" class="" role="tablist">
  <a class="list-group-item list-group-item-action bg-dark text-white" data-toggle="list" href="#home" role="tab">Home</a><hr>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="{{route('products.index')}}" role="tab">Products</a><hr>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Orders</a><hr>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Customers</a><hr>
</div>

<!-- Tab panes -->

    </div>

    <div class="col-md-10">

		

            <div class="container-fluid">
                <div class="row">
@yield('content')

         

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   <ul></ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with love<i class="fa fa-heart heart"></i> by <a href="">RM TechWorld</a>
                </div>
            </div>
        </footer>


    </div>
</div>
</div>

        
    </div>
    </div>




        



</body>

	<script src="/js/jquery-3.1.1.min.js"></script>

	<script src="/js/tether.min.js"></script>

	<script src="/js/bootstrap.js"></script>

	<script src="/js/swiper.js"></script>

    <script src="/js/scripts.js"></script>
    @yield('script')

<script>

   $(document).ready(function(){

$('a.list-group-item').click(function(){
// $(this).toggleClass('active');
// alert('sdklfhbuadh');
});

   });
</script>

</html>
