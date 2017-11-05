<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Concert+One|Dosis|Oleo+Script|Rozha+One" rel="stylesheet">
</head>
<body style="background-color:#f19f4d;">
	<div class="container" style="font-family: 'Dosis', sans-serif;">
		@yield('content')
	</div>
	@include('partials.footer')
</body>
</html>