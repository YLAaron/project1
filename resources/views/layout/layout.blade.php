<!DOCTYPE html>
<html>
<head>
	<title>講茶｜@yield('title','不是改這裡喔～')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('css')
</head>
<body>
	@include('layout.navbar')
		@yield('content')
	@include('layout.footer')
	@yield('js')
</body>
</html>