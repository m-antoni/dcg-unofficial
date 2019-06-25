@extends('layouts.app')

@section('content')

 <!--================Video Background=================-->

<header class="v-header video-container">
    <div class="fullscreen-video-wrap">
        {{-- <video src="{{ asset('/videos/city.MP4') }}" autoplay loop muted></video> --}}
    </div>
    <div class="header-overlay"><div>
    <div class="header-content">
        <h1 class="wow fadeInUp">DC GROUP OF COMPANIES</h1>
        <p class="wow fadeInLeft">Start your business with us</p>
        <a  href="{{ route('about') }}">
        	<button class="triggerHome bttn-fill bttn-lg wow zoomIn" data-wow-delay="1s">
        			Read more
        	</button>
        </a>
    </div>
</header>

@endsection