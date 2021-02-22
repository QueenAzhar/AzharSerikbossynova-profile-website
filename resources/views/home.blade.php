<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV</title>
	<link rel="stylesheet" href="style_home.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<nav class="navbar">
		<div class="max-width">
			<div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
				<ul class="menu">
					<li><a href="#">Home</a></li>
					<li><a href="{{ route('about')}}">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Skills</a></li>
					<li><a href="#">Teams</a></li>
					<li><a href="{{ route('contact')}}">Contact</a></li>


				</ul>
		</div>
	</nav>

	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Hello,my name is</div>
				<div class="text-2">Azhar </div>
				<div class="text-3">And I'm a <span>Front-end developer.</span></div>

			</div>
		</div>
	</section>

	
</body>
</html>