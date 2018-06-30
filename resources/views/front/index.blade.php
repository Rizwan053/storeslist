@extends('layouts.home')
@section('content')
<div class="main-slider">
		<div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
			data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
			data-swiper-breakpoints="true" data-swiper-loop="true" >
			<div class="swiper-wrapper">
{{-- <div class="w3-content w3-display-container"> --}}
    @foreach($products as $product)
<img height=300 class="mySlides" src="/img/{{$product->image}}" style="width:100%">
    @endforeach

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
{{-- </div> --}}
				
			</div><!-- swiper-wrapper -->

		</div><!-- swiper-container -->

	</div><!-- slider -->

	<section class="blog-area section">
		<div class="container">

			<div class="row">
@foreach($products as $pro)

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

                        <div class="blog-image"><img src="/img/{{$pro->image}}" alt="Blog Image"></div>

							{{-- <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a> --}}

							<div class="blog-info">

                            <h4 class="title"><a href="#"><b>{{$pro->name}}</b></a></h4>
                            {{$pro->name}}

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i>57</a></li>
									<li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
									<li><a href="#"><i class="ion-eye"></i>138</a></li>
								</ul>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
@endforeach
				
		</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->

@endsection