<!DOCTYPE html>
<html>
<head>
	<title>GregQuest</title>
	
	<meta charset='utf-8'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="/css/styles.css" type='text/css' rel='stylesheet'>
</head>
<body>
	<div class="container" id="wrapper">
		<header>
			<h1>GregQuest</h1>
		</header>

		<nav class="navbar bg-faded">
  			<a class="navbar-brand" href="#">GregQuest</a>
			<ul class="navbar-nav">
 				<li class="nav-item active">
    				<a class="nav-link" href="/newgame">Start Over</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#">High Scores</a>
  				</li>
			</ul>
		</nav>

		@yield('content')

		@stack('body')

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>