@extends('layouts.app')

@section('content')

 <!--================Video Background=================-->

<header class="v-header video-container">
    <div class="fullscreen-video-wrap">
        {{-- <video src="{{ asset('/videos/city.MP4') }}" autoplay loop muted></video> --}}
    </div>
    <div class="header-overlay"><div>
    <div class="header-content">
        <h1 class="wow fadeInDown">DC GROUP OF COMPANIES</h1>
        <p class="wow fadeInUp">Start your business with us</p>
        <a  href="{{ route('about') }}">
        	<button class="triggerHome bttn-simple bttn-lg wow zoomIn" data-wow-delay="1s">
        			Read more
        	</button>
        </a>
    </div>
</header>

<!--================ BLOCKQUOTE =================-->
{{-- 
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
</div> --}}


{{-- 
<div id="triggerHome" data-iziModal-title="DC Group of Companies" 
        data-iziModal-subTitle="About" 
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
</div> --}}



@endsection