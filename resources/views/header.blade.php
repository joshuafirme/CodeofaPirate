<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Code of a Pirate"; ?></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset("css/custom-css.css") }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset("libs/bootstrap/dist/css/bootstrap.css") }}" rel="stylesheet" media="screen">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

	<!-- include the navigation bar -->
	@include('nav')

    <!-- container -->
    <div class="container" style="margin-top: 120px;">
