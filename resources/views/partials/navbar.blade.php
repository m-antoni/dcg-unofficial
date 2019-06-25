<header>
   <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
   		<div class="container">
	   				<a id="logo" class="navbar-brand" href="/">
	   					<img id="logoImage" src="{{ asset('img/logo.png') }}" alt="logo">
	   				</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarToggler">
			  			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					      	<li class="nav-item">
					      		<a class="nav-link" href="{{ route('homepage') }}">Home</a>
						      </li>
						      <li class="nav-item">
						       		<a class="nav-link" href="{{ route('about') }}">About</a>
						      </li>
						       <li class="nav-item">
						       		<a class="nav-link" href="{{ route('corporate') }}">Corporate Holdings</a>
						      </li>
						      <li class="nav-item">
											<a class="nav-link" href="{{ route('clients') }}">Clients</a>	
						      </li>
						      <li class="nav-item">
											<a class="nav-link" href="{{ route('feed') }}">Feed</a>	
									</li>
									<li class="nav-item">
											<a class="nav-link" href="{{ route('payment') }}">Payment</a>	
									</li>
									<li class="nav-item">
											<a class="nav-link" href="{{ route('contact') }}">Contact</a>	
									</li>
				    	</ul>
				  </div>	
   		</div>
		</nav>
</header>

