@extends('layouts.app')

@section('content')

<!--================ CONTACT US =================-->
<div id="contact">
		<div class="container">
					<div class="row">
						<div class="col-md-4">
								<h1 class="wow fadeInDown" data-wow-delay="1s"> Contact Us</h1><hr class="bg-light">
								<form action="{{ route('send') }}" method="POST" class="wow fadeInLeft"> 
									{{-- csrf --}}
									@csrf
									<div class="form-group">
								    <label>Name:</label>
								    <input type="text" class="form-control" placeholder="enter your name" name="name">
								  </div>
								  <div class="form-group">
								    <label>Email:</label>
								    <input type="email" class="form-control" name="email" placeholder="enter your email">
								  </div>
								  <div class="form-group">
								    <label>Message:</label>
								    <textarea class="form-control" rows="4" name="message" placeholder="enter your message">
								    </textarea>
								  </div>
								  <button type="submit" class="bttn bttn-simple bttn-md bttn-block"><i class="fa fa-send"></i> Submit</button>
								</form>
						</div>
				</div>
		</div>
</div>

@endsection