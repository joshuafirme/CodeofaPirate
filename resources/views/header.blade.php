<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo isset($page_title) ? strip_tags($page_title) : "Code of a Pirate"; ?></title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset("libs/bootstrap/dist/css/bootstrap.css") }}" rel="stylesheet" media="screen">

	<style>
	.margin-bottom-1em{
		margin-bottom:1em;
	}

	.width-30-percent{
		width:30%;
	}

	.margin-1em-zero{
		margin:1em 0;
	}

	.width-30-percent{
		width:30%;
	}

	.width-70-percent{
		width:70%;
	}

	.photo-thumb{
		width:214px;
		height:214px;
		float:left;
		border: thin solid #d1d1d1;
		margin:0 1em 1em 0;
	}

	div#blueimp-gallery div.modal {
		overflow: visible;

	}

	.form-signin
	{
		max-width: 330px;
		padding: 15px;
		margin: 0 auto;
	}
	.form-signin .form-control
	{
		position: relative;
		font-size: 16px;
		height: auto;
		padding: 10px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.form-signin .form-control:focus
	{
		z-index: 2;
	}
	.form-signin input[type="text"]
	{
		margin-bottom: -1px;
		border-bottom-left-radius: 0;
		border-bottom-right-radius: 0;
	}
	.form-signin input[type="password"]
	{
		margin-bottom: 10px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
	.account-wall
	{
		margin-top: 40px;
		padding: 40px 0px 20px 0px;
		background-color: #ffffff;
		box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
	}
	.login-title
	{
		color: #555;
		font-size: 22px;
		font-weight: 400;
		display: block;
	}
	.profile-img
	{
		width: 96px;
		height: 96px;
		margin: 0 auto 10px;
		display: block;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
	}
	.select-img
	{
		border-radius: 50%;
		display: block;
		height: 75px;
		margin: 0 30px 10px;
		width: 75px;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
	}
	.select-name
	{
		display: block;
		margin: 30px 10px 10px;
	}

	.logo-img
	{
		width: 96px;
		height: 96px;
		margin: 0 auto 10px;
		display: block;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
	}

	.margin-top-40{
		margin-top:40px;
	}

	.text-align-center{
		text-align:center;
	}

	div.gallery {
		border: 1px solid #ccc;
		border-radius: 5px
	}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px 6px !important;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

	</style>

</head>
<body>

	<!-- include the navigation bar -->
	@include('nav')

    <!-- container -->
    <div class="container">
