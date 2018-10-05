<!DOCTYPE html>
<html>
<head>
	@include('partials/_head')
</head>
<body>
	<div class="wrapper">
		@include('partials/_header')

		@include('partials._messages')
		<div class="content">
			@yield('content')
		</div>

		<div class="footer">
		@include('partials/_footer')
		</div>
	</div>
</body>
</html>