<!DOCTYPE html>
<html>
<head>
	<title>foodpanda | @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/_all-skins.css') }}">

</head>
<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    @include('backend.layouts.partials.header')
    @include('backend.layouts.partials.sidebar')
    @yield('content')
    @include('backend.layouts.partials.footer')
  </div>
   	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<script src="backend/js/adminlte.js"></script>
   	<script>
   	 $(document).ready(function() {
       	$('select').material_select();
     	 });
     	</script>
   </body>
   </html>
