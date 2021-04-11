<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV</title>
	<link rel="stylesheet" href="style_home.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<style>
.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
	float:right;
	
  margin-right:250px;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 10px 8px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: black;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: black;}
</style>
</head>
<body>

	<nav class="navbar">
	<div class="dropdown">
  <button class="dropbtn">@lang('lang.language')</button>
  <div class="dropdown-content">
    <a href="locale/en"><img src="{{asset('img/us.jpg')}}" style="width:30px; height:30px;"alt="">@lang('lang.english')</a>
    <a href="locale/kz"><img src="{{asset('img/kz.jpeg')}}" style="width:30px; height:30px;"alt="">@lang('lang.kazakh')</a>
    <a href="locale/ru"><img src="{{asset('img/rus.jpg')}}" style="width:30px; height:30px;"alt="">@lang('lang.russian')</a>
  </div>
</div>
		<div class="max-width">
			<div class="logo"><a href="#">@lang('lang.portfo')<span>@lang('lang.lio')</span></a></div>
				<ul class="menu">
					<li><a href="#">@lang('lang.home_menu')</a></li>
					<li><a href="{{ route('about')}}">@lang('lang.about_menu')</a></li>
					<li><a href="#">@lang('lang.services_menu')</a></li>
					<li><a href="#">@lang('lang.skills')</a></li>
					<li><a href="{{ route('contact')}}">@lang('lang.contact_us')</a></li>


				</ul>
		</div>
	</nav>

	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">@lang('lang.text-1')</div>
				<div class="text-2">@lang('lang.text-2')</div>
				<div class="text-3">@lang('lang.text-3') <span>@lang('lang.text-4')</span></div>

			</div>
		</div>
	</section>

	
</body>
</html>