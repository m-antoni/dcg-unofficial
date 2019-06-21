@if(Request::is('/'))
<header>
   <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
   		<div class="container-fluid">
	   				<a id="logo" class="navbar-brand" href="/">
	   					<img id="logoImage" src="{{ asset('img/logo.png') }}" alt="logo">DC Group of Companies
	   				</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarToggler">
			  			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					      	<li class="nav-item">
					      		<a class="nav-link" href="#">Home</a>
						      </li>
						      <li class="nav-item">
						       		<a class="nav-link" href="#about">About</a>
						      </li>
						       <li class="nav-item">
						       		<a class="nav-link" href="#corporate">Corporate Holdings</a>
						      </li>
						      <li class="nav-item">
											<a class="nav-link" href="#our_clients">Clients</a>	
						      </li>
						      <li class="nav-item">
											<a class="nav-link" href="#feed">Feed</a>	
									</li>
									<li class="nav-item">
											<a class="nav-link" href="{{ route('payment') }}">Payment</a>	
									</li>
									<li class="nav-item">
											<a class="nav-link" href="#contact">Contact</a>	
									</li>
				    	</ul>
				  </div>	
   		</div>
		</nav>
</header>
@endif
