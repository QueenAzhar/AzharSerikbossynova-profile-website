 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>About me</title>
 	
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	
 	<style>
	 
		body{
			background: #2F4F4F;
			font-family: tahoma;
			text-align: justify;
			overflow: hidden;
			
		}
	 .logo a{
	color: #fff;
	font-size: 35px;
	font-weight: 600;
	display: flex;
	position:fixed;
	width: 100%;
	padding: 30px 30px;
	
	font-family: 'Ubuntu', sans-serif;
	
}
.logo a span{
	color:crimson;

}

}
		#about{
			padding-top: 98px;
			padding-bottom: 101px;
		}
	 
		#about .triangle-right{
			margin-top: 95px;
			width: 0;
			height: 0;
			border-top: 259px solid transparent;
			border-left: 470px solid #d6c6b2;
			border-bottom: 259px solid transparent;
			
			
		}
	 
		#about .triangle-right img{
			position: absolute;
			left: -1px;
			top: 81px;
			width: 74%;
		 
		}
	 
		.fa-play{
			font-size: 100px;
			
		}
		
		
		#about .p-first{
			margin-bottom: 30px;
		}
		
		
		#about h2{
			margin-bottom: 47px;
			margin-top: 12px;
			
		}
		
		
		#about .social-link-text{
			margin-top: 50px;
			margin-bottom: 25px;			
			
		}
		
		#about .about-link{
			padding-left: 0px;
		}
		
		#about .about-link li{
			display: inline-block;
		}
		
		#about .about-link li a i{
			width: 50px;
			height: 50px;
			border-radius: 50%;
			line-height: 50px;
			text-align: center;
			border: 1px solid #d6c6b2;
			margin-right: 10px;
			font-size: 22px;
			color: #d6c6b2;
			transition: all .3s;
			
		}
		
		
		#about .about-link li a i:hover{
			color: #222222;
			background: #d6c6b2;
			border-color: #d6c6b2;
			
		}
	 
		
		#about .about-img{
			position: relative;
			
		}
		
		#about .about-img{
			position: relative;
			
		}
		
		#about .about-img .pro{
			position: absolute;
			bottom: 100px;
			top: 100px;
			left: -2px;
			width: 350px;
			height: 350px;
			
		}
		
		.color-3{
			color: #d6c6b2;
		}
		
		
		.text-white{
			color: white;
		}
		
		
		p{
			margin-bottom: 0;
			font-size: 16px;
			line-height: 24px;
			color: #d6c6b2;
		}
		
		.btn{
			background-color:#008080;
			border-radius: 0;
			padding: 10px 20px;
		}
		
		
		
		
	</style>
 	
 	
 </head>
 <body><br>
 <br>
 <br><div class="logo"><a href="{{ route('home')}}">Portfo<span>lio.</span></a></div>
 <br>
 <br>
 <br>
 	
 	<section id="about">
 		
	<div class="container">
		<div class="row">
		<div class="col-md-5">
			<div class="about-img">
            <img class="shape" src="images/about_tringle.png" alt="">
            
            <img class="pro" src="images/profile.png" alt="">
            

			</div>
		</div>
		<br>
		<div class="col-md-7 about-right">
			
			<h2 class="color-3"><b>About Me</b>
			</h2>
			
			<p class="p-first text-white">
				<p>My name's Azhar.I'm currently studying at SDU university,where my faculty is Engineering.
                                    While you study, lots of things start changing: your thoughts, your ideas, people who surround you. You stop being a child. You realize that you’ve grown. You start earning your first money. Lots of students nowadays work and study at the same time. Eventually you understand that it’s great to have the job you like. High education may help a lot in getting your dream job in future.
</p>
			</p>
			
			<h3 class="color-3 social-link-text">
				<button class="btn " >Hire Me</button>
			</h3>
			
			<ul class="about-link">
				<li><a href=""><i class="fa fa-fonticons"></i></a></li>
				
				<li><a href=""><i class="fa fa-envira"></i></a></li>
				
				
				<li><a href=""><i class="fa fa-reddit-alien"></i></a></li>
				
				
				<li><a href=""><i class="fa fa-dribbble"></i></a></li>
				
				
				<li><a href=""><i class="fa fa-youtube-play"></i></a></li>
		 
			</ul>
		 
			
		</div>
	 
		</div>
	</div>
  
 	</section>
 	 
 </body>
 </html>