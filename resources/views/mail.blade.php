<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
	<body data-token="{{ csrf_token() }}">
			<p>Name: <b> {{ $name }}</b> </p>
			<p>Email: <i> {{ $email }} </i></p>
			<hr>
			{{-- NOTE: do not use $message because it is reserve word in laravel --}}
			<p>
				<b>Message: </b><br>
					{{ $body }}
			</p>

	</body>
</html>