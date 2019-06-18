@extends('layouts.app')

@section('content')


 <!--================Video Background=================-->

<header class="v-header video-container">
    <div class="fullscreen-video-wrap">
        <video src="{{asset('/videos/city.MP4')}}" autoplay loop muted></video>
    </div>
    <div class="header-overlay"><div>
    <div class="header-content">
        <h1 class="wow fadeInDown">DC Group  of Companies</h1>
        <p class="wow fadeInUp">Start your business with us</p>
        <button class="triggerHome bttn-fill bttn-danger bttn-lg">Learn more</button>
    </div>
</header>

{{-- MODAL CONTENT --}}
<!--iziModal-->
<div id="triggerHome" data-iziModal-title="DC Group of Companies" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container">
            <div class="row">
                <div id="homeModal" class="col-md-12 py-3">
										<h4>DC Group of Companies </h4>
										<p class="text-justify">
												 is an international investment banking conglomerate headquartered in Singapore and, is primarily in the business of venture capital, mergers & acquisitions by means of internally generated private equity, assets & holdings.
										</p>
										<h4>What We Do</h4> 
										<p class="text-justify">
												The DC Group, with the mission of building lives by innovating and establishing its foothold in various industries and emerging markets, aids its clients, primarily, by providing efficient, effective and quality products, services and solutions to essential problems, matters and difficulties that affect lives, organizations and communities, as a whole, thru our diversified corporate members, subsidiaries and affiliate-holdings.
										</p>		
                </div>
            </div>
        </div>
    </div>
</div><!--iziModal -->


 <!--================ABOUT =================-->
<div id="about" class="container mt-5">
		<div class="row justify-content-center">
				<div class="col-md-4">
						<img src="{{asset('img/carousel/02.jpg')}}" class="image01 img-thumbnail wow flipInX mb-2">
				</div>
				<div class="col-md-12">
						<h4 class="wow fadeInRight" data-wow-delay="1s"><i class="fa fa-bookmark"></i> How We Started</h4>
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
								<h4 class="wow fadeInRight" data-wow-delay="1s"><i class="fa fa-bookmark"></i> Who We Are Now</h4>	
								<p class="text-justify">
									The DC Group is proud to have been able to establish itself as an international premiere investment banking conglomerate now headquartered in Singapore, with corporate holdings and operations in 7 countries including the U.S.A.. Currently, the DC Group has been able to diversify its portfolio, presence and foothold in 10 major industries via its 35 Member Corporate Subsidiaries and 26 Affiliate - Holdings that cater to the continued growth and development required especially in emerging markets. All these, together with our strategic partners, for us to better serve the rapidly evolving needs and requirements of professionals, entrepreneurs, businesses, organizations and communities today.
								</p>
		
								<h4 class="wow fadeInRight" data-wow-delay="1s"><i class="fa fa-bookmark"></i> Our Goal</h4>
								<p class="text-justify">
										The DC Group aims to build more opportunities for people and communities around the world by continuously expanding its global reach in major industries thru its investments, portfolio, corporate member subsidiaries and affiliate - holdings at the same time, asking our clients to leave certain essential matters to us and, thus, enabling them to succeed by focusing on what really matters to them and on what they do best.		
								</p>
					</div>
		</div>
</div>	



 <!--================ CORPORATE HOLDINGS =================-->
<div id="corporate">

</div>




 <!--================ BENEFICIARY ORGANIZATION=================-->
<div id="beneficiary">
		<div class="container">
				<div class="row">
							<div class="col-md-3">
								<img class="img-thumbnail" src="{{asset('/img/beneficiary/1.jpg')}}" alt="..">
							</div>	
							<div class="col-md-3">
								<img class="img-thumbnail" src="{{asset('/img/beneficiary/2.jpg')}}" alt="..">
							</div>
							<div class="col-md-3">
								<img class="img-thumbnail" src="{{asset('/img/beneficiary/3.jpg')}}" alt="..">
							</div>
							<div class="col-md-3">
								<img class="img-thumbnail" src="{{asset('/img/beneficiary/4.jpg')}}" alt="..">
							</div>
							<div class="col-md-6">
								<img class="img-thumbnail" src="{{asset('/img/beneficiary/5.jpg')}}" alt="..">
							</div>
							<div class="col-md-6">
								<img class="card-img" src="{{asset('/img/beneficiary/6.jpg')}}" alt="..">
							</div>
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


<!--================ CONTACT US =================-->

<div id="contact">
		<div class="container">
					<div class="row">
						<div class="col-md-5">
								<h1 class="wow fadeInRight" data-wow-delay="1s">Contact Us</h1>
								<form class="wow bounce"> 
								  <div class="form-group">
								    <label for="exampleInputEmail1"><h4>Name:</h4></label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
								  </div>
								  <div class="form-group">
								    <label for="emailForm"><h4>Email</h4></label>
								    <input type="password" class="form-control" id="emailForm" placeholder="enter your email">
								  </div>
								  <div class="form-group">
								    <label for="textareaForm"><h4>Message:</h4></label>
								    <textarea class="form-control" id="textareaForm" rows="4" placeholder="Message here..."></textarea>
								  </div>
								  <button type="submit" class="bttn-fill bttn-danger bttn-block">Submit</button>
								</form>
						</div>
				</div>
		</div>
</div>
 <!--================ CORPORATE HOLDINGS =================-->

<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.889518499371!2d121.05235931484017!3d14.605368989799423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7ddd96105b1%3A0x24585ff686b90c9c!2sRichbelt+Tower!5e0!3m2!1sen!2sph!4v1560511229059!5m2!1sen!2sph" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

	<!-- Footer -->
	<footer id="footer">
			<div class="inner">
				<div class="content container">
					<section>
						<h3 class="text-dark"><i class="fa fa-building"></i> DC Group of Companies</h3>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis reiciendis facilis culpa necessitatibus deserunt eos incidunt ducimus, nemo tempore optio quis laborum repellendus debitis sed eligendi autem beatae sapiente corrupti.</p>
					</section>
					<section>
						<h4 class="text-dark"><i class="fa fa-envelope"></i> Contact Us</h4>
						<ul class="alt">
							<li>GF Richbelt Terraces Annapolis Greenhills San Juan, Philippines</li>
							<li>(02) 734-3340 | 09667605414</li>
							<li>info@dcgroup.ph</li>
						</ul>
					</section>
					<section>
						<h4 class="text-dark"><i class="fa fa-hand-o-right"></i> Social Media</h4>
						<ul class="plain">
							<li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter">&nbsp;</i>Twitter</a></li>
							<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook">&nbsp;</i>Facebook</a></li>
							<li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram">&nbsp;</i>Instagram</a></li>
						</ul>
					</section>
				</div>
				<div class="copyright">
					<h2 class="text-dark">&copy; DC Group of Companies Alrights Reserved 2019</h2>
				</div>
			</div>
	</footer>


@endsection