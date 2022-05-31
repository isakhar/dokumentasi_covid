<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('backend.includes.head')
</head>
<body>
	@yield('content')

	@include('backend.includes.page-js')
</body>
</html>
