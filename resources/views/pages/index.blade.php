@extends('layouts.app')

@section('content')


 <!--================Video Background=================-->

<header class="v-header video-container">
    <div class="fullscreen-video-wrap">
        {{-- <video src="{{ asset('/videos/city.MP4') }}" autoplay loop muted></video> --}}
    </div>
    <div class="header-overlay"><div>
    <div class="header-content">
        <h1 class="wow fadeInDown">DC Group Of Companies</h1>
        <p class="wow fadeInUp">Start your business with us</p>
        <button class="triggerHome bttn-fill bttn-danger bttn-lg wow zoomIn" data-wow-delay="1s">Read more</button>
    </div>
</header>


 <!--================ABOUT =================-->
<div id="about" class="container">
		<div class="row justify-content-center">
				<div class="col-md-4">
						<img src="{{asset('img/carousel/02.jpg')}}" class="image01 img-thumbnail wow flipInX mb-2">
				</div>
				<div class="col-md-12">
						<h4 class="wow fadeInLeft" data-wow-delay="1s"><i class="fa fa-bookmark"></i> How We Started</h4>
								 <p class="text-justify">
										The DC Group was established in 2002 in the Philippines, initially, as a small trading company of electronics, apparels and overruns. By 2005, the DC Group expanded by creating a consultancy firm providing corporate affairs services, helping professionals, organizations and corporations on matters pertaining to their start-up, marketing, advertising and event needs and requirements. After continuously assisting and serving the ever growing needs and requirements of our clients, in 2009, the DC Group then decided to incorporate more value-added services such as project management, human resource assistance, printing services, legal services and accounting services, among others. Due to its continued growth, innovation and development, in 2014 the DC Group then decided to be of more help and assistance to its clients by means of establishing itself as a private investment vehicle primarily in the business of venture capital, mergers and acquisitions via internally generated private equity, assets, resources & holdings.
								</p>					
					</div>
		</div>

		<div class="row justify-content-center">
					<div class="col-md-4">
							<img src="{{asset('img/carousel/03.jpg')}}" class="img-thumbnail wow flipInX mb-2">
					</div>
					<div class="col-md-12">
								<h4 class="wow fadeInLeft" data-wow-delay="1s"><i class="fa fa-bookmark"></i> Who We Are Now</h4>	
								<p class="text-justify">
									The DC Group is proud to have been able to establish itself as an international premiere investment banking conglomerate now headquartered in Singapore, with corporate holdings and operations in 7 countries including the U.S.A.. Currently, the DC Group has been able to diversify its portfolio, presence and foothold in 10 major industries via its 35 Member Corporate Subsidiaries and 26 Affiliate - Holdings that cater to the continued growth and development required especially in emerging markets. All these, together with our strategic partners, for us to better serve the rapidly evolving needs and requirements of professionals, entrepreneurs, businesses, organizations and communities today.
								</p>
		
								<h4 class="wow fadeInLeft" data-wow-delay="1s"><i class="fa fa-bookmark"></i> Our Goal</h4>
								<p class="text-justify">
										The DC Group aims to build more opportunities for people and communities around the world by continuously expanding its global reach in major industries thru its investments, portfolio, corporate member subsidiaries and affiliate - holdings at the same time, asking our clients to leave certain essential matters to us and, thus, enabling them to succeed by focusing on what really matters to them and on what they do best.		
								</p>
					</div>
		</div>
</div>	


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
	
 <!--================ CORPORATE HOLDINGS =================-->
<div id="corporate">
		<div class="container">
				<div class="corporateTitle">
						<h1 class="wow fadeInRight">Corporate Members, Subsidiaries & Affiliate - Holdings </h1>
						<p class="wow fadeInUp">DC Group Of Companies</p>
				</div>
				<div class="row justify-content-center no-gutters p-0">
						<div class="col-sm-2">
									<figure class="imghvr-shutter-in-out-diag-1" style="background-color:#ff5964 !important;">
								    <img src="{{ asset('/img/corporate/agri.jpg') }}" alt="01">
								    <figcaption>
								    		<div class="container">
								    				<h4 class="mt-3">Agriculture</h4>
								    		</div>
								    </figcaption>
								    <a href="#" class="agri"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-shutter-in-out-diag-1">
								    <img src="{{asset('/img/corporate/legal.jpg')}}">
								    <figcaption>
											 <h4>Corporate & Legal Services</h4>
								    </figcaption>
								     <a href="#" class="legal"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-shutter-in-out-diag-1">
								    <img src="{{asset('/img/corporate/food.jpg')}}">
								    <figcaption>
											 <h4>Food & Beverage</h4>
								    </figcaption>
								    <a href="#" class="food"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-shutter-in-out-diag-1">
								    <img src="{{asset('/img/corporate/leisure.jpg')}}">
								    <figcaption>
											 <h4>Leisure & Hospitality</h4>
								    </figcaption>
								    <a href="#" class="leisure"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-shutter-in-out-diag-1">
								    <img src="{{asset('/img/corporate/health.jpg')}}">
								    <figcaption>
											 <h4 class="mt-3">Healthcare</h4>
								    </figcaption>
								    <a href="#" class="health"></a>
								  </figure>
						</div>
				</div>	

				<div class="row justify-content-center no-gutters">
						<div class="col-sm-2">
									<figure class="imghvr-flip-horiz">
								    <img src="{{asset('/img/corporate/it.jpg')}}">
								    <figcaption>
											 <h4>Multimedia & IT</h4>
								    </figcaption>
								    <a href="#" class="it"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-flip-horiz">
								    <img src="{{asset('/img/corporate/print.jpg')}}">
								    <figcaption>
											 <h4>Printing & Publishing</h4>
								    </figcaption>
								    <a href="#" class="print"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-flip-horiz">
								    <img src="{{asset('/img/corporate/realestate.jpg')}}">
								    <figcaption>
											 <h4>Real Estate & Utilities</h4>
								    </figcaption>
								    <a href="#" class="real"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-flip-horiz">
								    <img src="{{asset('/img/corporate/trading.jpg')}}">
								    <figcaption>
											 <h4>Trading & Distribution</h4>
								    </figcaption>
								    <a href="#" class="trading"></a>
								  </figure>
						</div>
						<div class="col-sm-2">
									<figure class="imghvr-flip-horiz">
								    <img src="{{asset('/img/corporate/venture.jpg')}}">
								    <figcaption>
											 <h4>Venture & Capital</h4>
								    </figcaption>
								    <a href="#" class="venture"></a>
								  </figure>
						</div>
				</div>	
		</div>
</div>


<!--================ BENEFICIARY ORGANIZATION =================-->

<div id="beneficiary">
	<div class="container">
		<h1 class="wow fadeInLeft">Beneficiary Organizations</h1>
		<div class="owl-carousel owl-beneficiary owl-theme">
				@for($b = 1; $b <= 6; $b++)
						<div><img src="/img/beneficiary/{{ $b }}.jpg" alt="{{$b}}.image"></div>
				@endfor
		</div>
	</div>
</div>


 <!--================ CLIENTS =================-->

<div id="our_clients">
	<div class="container">
		<h1 class="wow fadeInDown">Our Clients</h1>
		<p class="wow fadeInUp">We've got their backs!</p>
		<div class="owl-carousel owl-theme">
				@for($i = 1; $i <= 31; $i++)
						<div><img src="/img/clients/{{ $i }}.jpg" alt="{{$i}}.image"></div>
				@endfor
		</div>
	</div>
</div>


<!--================ FEED =================-->

<div class="feed">
		<div class="container">
				<h1>Where New Ideas Come From - by Jay Shetty</h1>
				<div id="videoembed">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Bs7R7FX4aYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>		
		</div>
</div>







<!--================ CONTACT US =================-->

<div id="contact">
		<div class="container">
					<div class="row">
						<div class="col-md-5">
								<h1 class="wow fadeInRight" data-wow-delay="1s">Contact Us</h1>
								<form action="{{ route('send') }}" method="POST" class="wow bounce"> 
									{{-- csrf --}}
									@csrf
									<div class="form-group">
								    <label><h4>Name:</h4></label>
								    <input type="text" class="form-control" placeholder="enter your name" name="name">
								  </div>
								  <div class="form-group">
								    <label><h4>Email:</h4></label>
								    <input type="email" class="form-control" name="email" placeholder="enter your email">
								  </div>
								  <div class="form-group">
								    <label><h4>Message:</h4></label>
								    <textarea class="form-control" rows="4" name="message" placeholder="enter your message">
								    </textarea>
								  </div>
								  <button type="submit" class="bttn-fill bttn-danger bttn-block">Submit</button>
								</form>
						</div>
				</div>
		</div>
</div>

<!--================ GOOGLE MAP =================-->

<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.889518499371!2d121.05235931484017!3d14.605368989799423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7ddd96105b1%3A0x24585ff686b90c9c!2sRichbelt+Tower!5e0!3m2!1sen!2sph!4v1560511229059!5m2!1sen!2sph" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

	<!-- Footer -->
	<footer id="footer">
			<div class="inner">
				<div class="content container">
					<section>
						<h4><i class="fa fa-building"></i> DC Group of Companies</h4>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis reiciendis facilis culpa necessitatibus deserunt eos incidunt ducimus, nemo tempore optio quis laborum repellendus debitis sed eligendi autem beatae sapiente corrupti.</p>
					</section>
					<section>
						<h4><i class="fa fa-envelope"></i> Contact Us</h4>
						<ul class="alt">
							<li>GF Richbelt Terraces Annapolis Greenhills San Juan, Philippines</li>
							<li>(02) 734-3340 | 09667605414</li>
							<li>info@dcgroup.ph</li>
						</ul>
					</section>
					<section>
						<h4><i class="fa fa-hand-o-right"></i> Social Media</h4>
						<ul class="plain">
							<li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter">&nbsp;</i>Twitter</a></li>
							<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook">&nbsp;</i>Facebook</a></li>
							<li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram">&nbsp;</i>Instagram</a></li>
						</ul>
					</section>
				</div>
				<div class="copyright">
					<h2>&copy;eveloped by Zarata Creatives 2019</h2>
					<h2>All Rights Reserved, DC Group Of Companies</h2>
				</div>
			</div>
	</footer>

@endsection