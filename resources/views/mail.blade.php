<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
	<body data-token="{{ csrf_token() }}">
			{{-- body of the subject: email --}}
			<p>Email: <i> {{ $email }} </i></p>
			{{-- body of the name --}}
			<p>Name: <b> {{ $name }}</b> </p>
			<hr>
			{{-- NOTE: do not use $message because it is reserve word in laravel --}}
			<p><b>Message: </b><br>
				{{ $msg }}</p>
			
	</body>
</html>