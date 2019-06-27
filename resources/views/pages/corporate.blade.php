@extends('layouts.app')

@section('content')

<div id="corporate">
	
	  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	    </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="carousel-item active" style="background-image: url('../img/corporate/1.jpg')">
	        <div class="carousel-caption d-none d-md-block">
	        	<h1>Venture & Capital</h1>
	        </div>
	      </div>
	       <div class="carousel-item" style="background-image: url('../img/corporate/2.jpg')">
	        <div class="carousel-caption d-none d-md-block">
	        	<h1>Corporate & Legal Services</h1>
	        </div>
	      </div>
	       <div class="carousel-item" style="background-image: url('../img/corporate/3.jpg')">
	        <div class="carousel-caption d-none d-md-block">
							<h1>Multimedia and IT</h1>
	        </div>
	      </div>
	       <div class="carousel-item" style="background-image: url('../img/corporate/4.jpg')">
	        <div class="carousel-caption d-none d-md-block">
	        	<h1>Trading & Distribution</h1>
	        </div>
	      </div>
	    </div> <!-- inner -->
    </div><!-- carousel -->
    
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
     </a>
	<!--================ BLOCKQUOTE =================-->

<div id="quote">
		<div class="container">
				<div class="row justify-content-center">
						<div class="col-md-8">
								<blockquote class="blockquote text-center">
								  <p class="mb-0 wow fadeInDown">I'm convinced that about half of what separates <b>successful entrepreneurs</b> from the non-successful ones is pure perseverance</p>
								  <footer class="blockquote-footer mt-3 wow fadeInUp" data-wow-delay="1s"><cite title="Source Title">Steve Jobs</cite></footer>
								</blockquote>
						</div>
				</div>
		</div>
</div>

	<div class="container sec01">
			<div class="corporateTitle">
				<h1 class="wow zoomIn" align="center">Corporate Members, <br> Subsidiaries& Affiliate - Holdings </h1>
			</div>
			<div class="row justify-content-center">
					<div class="col-md-6">
							<div class="corporate-content">
									<ul>
											<li class="wow fadeInLeft">
													<a href="#" class="agri">Agriculture</a>
											</li>
											<li class="wow fadeInLeft">
													<a href="#" class="legal">Corporate & Legal Services</a>
											</li>
											<li class="wow fadeInRight">
													<a href="#" class="food">Food & Beverage</a>
											</li>
											<li class="wow fadeInRight">
													<a href="#" class="leisure">Leisure & Hospitality</a>
											</li>
											<li class="wow fadeInLeft">
													<a href="#" class="health">Healthcare</a>
											</li>
											<li class="wow fadeInLeft">
													<a href="#" class="it">Multimedia & IT</a>
											</li>
											<li class="wow fadeInRight">
													<a href="#" class="print">Printing & Publishing</a>
											</li>
											<li class="wow fadeInRight">
													<a href="#" class="real">Real Estate & Utilities</a>
											</li>
											<li class="wow fadeInLeft">
													<a href="#" class="trading">Trading & Distribution</a>
											</li>
											<li class="wow fadeInLeft">
												<a href="#" class="venture">Venture & Capital</a>
											</li>
									</ul>
							</div>
					</div>
			</div>
	</div>

  </div>	{{-- corporate --}}

<!--================ BENEFICIARY ORGANIZATION =================-->

<div id="beneficiary">
	<div class="container">
		<h1 class="wow zoomIn">Beneficiary Organizations</h1>
		<div class="owl-carousel owl-beneficiary owl-theme">
				@for($b = 1; $b <= 6; $b++)
						<div><img src="/img/beneficiary/{{ $b }}.jpg" alt="{{ $b }}.image"></div>
				@endfor
		</div>
	</div>
</div>


<!--================ MODAL CONTENTS =================-->

	@include('partials.modals')

<!--================ MODAL CONTENTS =================-->


@endsection