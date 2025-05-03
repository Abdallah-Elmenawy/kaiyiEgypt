<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta name="description" content="">
		<meta name="keywords" content="">

		@include('layouts.head')

	</head>

	<body class="index-page">

				@include('layouts.main-header')			

				<main class="main">
					@yield('content')
				</main>

				@include('layouts.footer')
				@include('layouts.footer-scripts')	
	</body>
</html>

{{-- <script>
	setInterval(() => {
		$("#notifications_count").load(window.location.href + "#notifications_count");
		$("#underdnotifications").load(window.location.href + "#underdnotifications");
	}, 5000);
</script> --}}