<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('welcome')
	@section('chudu')
	@parent
	@endsection
	@yield('chudu1')
	<p>page 1 is here</p>

</body>
</html>