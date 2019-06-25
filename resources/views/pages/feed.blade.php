@extends('layouts.app')

@section('content')

<!--================ FEED =================-->

<div id="feed">
		<div class="container sec01">
				<div class="row">
						<div class="col-md-6">
								<h1 class="wow fadeInLeft">Where New Ideas Come From</h1>
								<p>- by Jay Shetty</p>
								<div id="videoembed" class="wow fadeInUp">
										<iframe width="100%" height="315" src="https://www.youtube.com/embed/Bs7R7FX4aYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>		
						</div>

						<div class="col-md-6">
								<h2 class="wow fadeInRight">
										“Starve your <br>
										distractions, <br>
										feed your <br>
										focus.”
								</h2>
						</div>
				</div>
		</div>
		

	<div class="parallaxFeed">
		<div class="caption wow zoomIn">
				<span class="border">FEED</span>
		</div>
	</div>		

	<div class="sec02">
			<div class="container">
					<div class="row">
							<div class="col-md-6">
								<h1>8 Things You Need to <br>Know Before Starting a Business</h1>
								<hr>
									<ol class="wow fadeInLeft">
											<li>Realize entrepreneurship is a marathon</li>
											<li>Ensure there is a demand for your product or service</li>
											<li>Know you won’t get it right the first time.</li>
											<li>Be patient and make sure you have adequate funding.</li>
											<li>Forget about what you want to sell.</li>
											<li>Be prepared to pivot.</li>
											<li>Listen to your customers.</li>
											<li>Solve a problem.</li>
									</ol>

									<p><i>read the whole article <a href="https://www.entrepreneur.com/slideshow/329360" target="_blank">visit here</a></i>	</p>
							</div>

							<div class="col-md-6">
									<img class="img-thumbnail wow flipInX" src="{{ asset('/img/feed_2.jpg') }}" alt="">
							</div>
					</div>
			</div>
	</div>

			

</div>{{-- feed --}}









@endsection