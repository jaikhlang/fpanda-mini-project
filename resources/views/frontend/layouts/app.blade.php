<!DOCTYPE html>
<html>
<head>
	<title>foodpanda | @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/frontend.css">
</head>
<body>

    @include('frontend.layouts.partials.header')
    @yield('content')
    @include('frontend.layouts.partials.footer')

   	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
   	<script src="{{ asset('js/init.js')}}"></script>
   	<script>
   	 $(document).ready(function() {
       	$('select').material_select();
     	 });
     	</script>
   </body>
   </html>
