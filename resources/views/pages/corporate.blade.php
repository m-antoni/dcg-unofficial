@extends('layouts.app')

@section('content')

<div id="corporate">

{{-- 	<div class="parallaxCorporate">
			<div class="caption">
				<span class="border">Corporate Members...</span>
			</div>
	</div>	 --}}
	
	<div class="bd-example">
	  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <img src="{{ asset('/img/corporate/1.jpg') }}" class="d-block w-100" alt="...">
	        <div class="carousel-caption d-none d-md-block">
	          <h5>First slide label</h5>
	          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <img src="..." class="d-block w-100" alt="...">
	        <div class="carousel-caption d-none d-md-block">
	          <h5>Second slide label</h5>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <img src="..." class="d-block w-100" alt="...">
	        <div class="carousel-caption d-none d-md-block">
	          <h5>Third slide label</h5>
	          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
	        </div>
	      </div>
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>


	<div class="container sec01">
			<div class="corporateTitle">
				<h1 align="center">Corporate Members, Subsidiaries & Affiliate - Holdings </h1>
			</div>
			<div class="row">
					<div class="col-md-6">
							<div class="owl-carousel owl-corporate owl-theme">
									@for($c = 1; $c <= 6; $c++)
											<div>
													<img src="/img/corporate/{{ $c }}.jpg" alt="{{ $c }}.image">
											</div>
									@endfor
							</div>
					</div>
					<div class="col-md-5 offset-1">
							<div class="corporate-content">
								<div class="card">
										<div class="card-body">
												<ul>
														<li>
																<a href="#" class="agri">Agriculture</a>
														</li>
														<li>
																<a href="#" class="legal">Corporate & Legal Services</a>
														</li>
														<li>
																<a href="#" class="food">Food & Beverage</a>
														</li>
														<li>
																<a href="#" class="leisure">Leisure & Hospitality</a>
														</li>
														<li>
																<a href="#" class="health">Healthcare</a>
														</li>
														<li>
																<a href="#" class="it">Multimedia & IT</a>
														</li>
														<li>
																<a href="#" class="print">Printing & Publishing</a>
														</li>
														<li>
																<a href="#" class="real">Real Estate & Utilities</a>
														</li>
														<li>
																<a href="#" class="trading">Trading & Distribution</a>
														</li>
														<li>
															<a href="#" class="venture">Venture & Capital</a>
														</li>
												</ul>
										</div>
								</div>
									
							</div>
					</div>
			</div>
	</div>
</div>


<!--================ BENEFICIARY ORGANIZATION =================-->

<div id="beneficiary">
	<div class="container">
		<h1>Beneficiary Organizations</h1>
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