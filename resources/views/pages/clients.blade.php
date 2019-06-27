@extends('layouts.app')

@section('content')

 <!--================ CLIENTS =================-->

<div id="clients">
	<div class="parallaxClients">
			<div class="caption wow zoomIn">
					<span class="border">OUR CLIENTS</span>
			</div>
	</div>		
	<div class="container">
			<div class="row">
					<div class="col-md-12 sec01">
								<p>We've got their backs!</p>
								<div class="owl-carousel owl-theme">
										@for($i = 1; $i <= 31; $i++)
												<div><img src="/img/clients/{{ $i }}.jpg" alt="{{$i}}.image"></div>
										@endfor
								</div>
								<p>Allow us to have yours!</p>
					</div>
					<div class="col-md-12 sec02">
							<h1><i class="fa fa-bookmark"></i> Lorem Ipsum</h1>
							<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, cum sint voluptatibus, nulla distinctio obcaecati vitae, quam ipsa reprehenderit consequatur iure aliquid soluta inventore accusamus ea aut delectus ad fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo rerum quibusdam iure cumque perferendis, soluta aut eius, error, autem suscipit illo repellat optio inventore dignissimos debitis, minus aliquid beatae enim.
							</p>

							<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, cum sint voluptatibus, nulla distinctio obcaecati vitae, quam ipsa reprehenderit consequatur iure aliquid soluta inventore accusamus ea aut delectus ad fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo rerum quibusdam iure cumque perferendis, soluta aut eius, error, autem suscipit illo repellat optio inventore dignissimos debitis, minus aliquid beatae enim.
							</p>
					</div>
			</div>
	</div>
</div>

@endsection