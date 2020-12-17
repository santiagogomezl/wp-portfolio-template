<?php include('includes/process.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<!-- FONTAWESOME -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Santiago Gomez</title>

<style>

/*=== FONTS ===*/

@font-face {
    font-family: 'Pacifico';
    src: url('fonts/Pacifico/Pacifico.ttf');
	src: url('fonts/Pacifico/Pacifico.woff');
	}
	
@font-face {
    font-family: 'Mohave-Bold';
    src: url('fonts/Mohave/Mohave-Bold.ttf');
	src: url('fonts/Mohave/Mohave-Bold.woff');
	}
	
@font-face {
    font-family: 'Mohave';
    src: url('fonts/Mohave/Mohave.ttf');
	src: url('fonts/Mohave/Mohave.woff');
	}
	
@font-face {
    font-family: 'Raleway-Regular';
    src: url('fonts/Raleway/Raleway-Regular.ttf');
	/*src: url('fonts/Raleway/Raleway-Regular.woff');*/
	}
	
@font-face {
    font-family: 'Raleway-Thin';
    src: url('fonts/Raleway/Raleway-Thin.ttf');
	/*src: url('fonts/Raleway/Raleway-Regular.woff');*/
	}


/*=== GENERAL STYLES ===*/

a,
a:active,
a:visited{
	text-decoration:none;
	}
	
.branding a,
#blog-link,
.about p a{
	color:#a69d65;		
	}
	
.main-menu a{
	color:#999;
	}
	
.portfolio h1,
.about h1,
.contact h1{
	text-align:center;
	margin:20px auto;
	font-family:'Mohave-Bold';
	font-size:2em;
	color:#a69d65;
	}


body{
	margin:0 auto;
	padding:0;
	min-width:768px;
	}

/*=== HEADER ===*/

header{
	width:100%;
	height:80px;
	min-width:768px;
	margin:0 auto;
	background:#fff;
	position:fixed;
	top:0;
	z-index:100;
	}
	
.site-header{
	height:100%;
	max-width:1280px;
	margin:0 auto;
	}
	
.branding{
	width:40%;
	height:100%;
	float:left;
	display:table;
	}
	
.branding h1{
	display:table-cell;
	vertical-align:middle;
	text-align:center;
	font-family:'Pacifico';
	font-size:2.5em;
	}
	
.toggle-menu{
	display:none;
	}
	
.main-menu{
	width:60%;
	height:100%;
	float:left;
	display:table;
	}	
	
.main-menu ul{
	display:table-cell;
	vertical-align:middle;
	padding:0 20px 0 0;
	list-style-type:none;
	text-align:right;
	}
	
.main-menu li{
	display:inline-block;
	margin:0 10px;
	font-family:'Mohave-Bold';
	font-size:1.5em;
	}
	
#blog-link{
	font-family:'Pacifico';
	font-size:1.3em;
	letter-spacing:0.04em;
	}
	
/*=== PORTFOLIO ===*/	

.portfolio{
	position:relative;
	top:80px;
	width:100%;
	max-width:1280px;
	margin:0 auto;
	height:auto;
	}
	
.container{
	width:100%;
	height:480px;
	padding:0;
	margin:25px auto;
	}
	
.gallery{
	max-width:1280px;
	height:100%;
	max-height:480px;
	margin:0 auto;
	overflow:hidden;
	}
	
.gallery ul{
	height:100%;
	max-height:480px;
/* 	width:auto; */
	padding:0;
	margin:0;
	font-size:0; /*fixs espace between li when displays inline-block*/	
	}
	
.gallery li{
	display:inline-block;
	list-style-type:none;
	height:100%;
	max-height:480px;
	width:auto;
	}
	
.gallery img{
	height:480px;
	}
	
.navigation{
	display:table;
	position:relative;
	z-index:10;
	bottom:480px;
	width:100%;
	max-width:1280px;
	height:100%;
	max-height:480px;
	margin:0 auto -480px auto;
	}
	
.navigation div{
	height:100%;
	width:60px;
	}
	
.nav-left{
	float:left;
	}	
	
.nav-right{
	float:right;
	}
	
.navigation img{
	opacity:0.7;
	position:relative;
	top:220px;
	display:block;
	margin:auto;
	width:40px;
	cursor:pointer;
	}
	
/*=== ABOUT ME ===*/

.about{
	position:relative;
	top:80px;
	width:50%;
	max-width:1280px;
	min-width:640px;
	height:auto;
	margin:0 auto;
	}	
	
.about p{
	font-family:'Raleway-Regular';
	font-size:1.1em;
	text-align:justify;
	letter-spacing:0.04em;
	line-height:1.2em;
	}
	
/*=== CONTACT ===*/

.contact{
	position:relative;
	top:80px;
	width:50%;
	min-width:640px;
	max-width:1280px;
	height:auto;
	margin:0 auto;
	}
	
.contact-status p{
	font-family:'Raleway-Thin';
	}
	
.contact form{
	width:100%;
	height:auto;
	}
	
.contact input[type=text],
.contact textarea,
.contact input{
	display:block;
	width:100%;
	margin:8px 0;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	-webkit-border-radius:0; 
	-moz-border-radius:0;
	border-radius:0;
	font-family:'Raleway-Regular';
	font-size:1em;
	box-sizing:border-box;
	border:1px solid #999;
	}
	
.contact input[type=text]{
	height:35px;
	padding:10px 6px;
	}
	
.contact textarea{
	height:80px;
	padding:5px;
	resize:none;
	}
	
.contact input[type=submit]{
	width:50px;
	height:36px;
	border:none;
	background:#a69d65 url(img/submit-contact.svg) center center no-repeat;
	background-size:28px 28px;
	cursor:pointer;
	display:inline-block;
	}
	
.social{
	display:inline-block;
	height:36px;
	width:100px;
	float:right;
	margin:8px 0;
	box-sizing:border-box;
	}
	
.social ul{
	padding:0;
	margin:0;
	list-style-type:none;
	text-align:right;
	}
	
.social li{
	display:inline-block;
	}
	
.social .fa{
	font-size:2.5em;
	line-height:0.9em;
	color:#a69d65;
	}
	
footer{
	position:relative;
	top:80px;
	width:50%;
	min-width:640px;
	max-width:1280px;
	height:auto;
	margin:20px auto;
	}
	
footer p{
	text-align:center;
	font-family:'Mohave';
	font-weight:100;
	font-size:1.1em;
	letter-spacing:0.03em;
	padding:10px 0;
	}

/*TABLET LANDSCAPE*/
@media only screen and (min-width:769px) and (max-width:1024px){

body{
	min-width:1024px;
	}


.portfolio,
.gallery{
	max-width:1024px;
	}
	
.container,
.gallery,
.gallery ul,
.gallery li,
.gallery img{
	height:384px;
	}
	
.navigation{
	bottom:384px;
	max-width:1024px;
	max-height:384px;
	margin:0 auto -384px auto;
	}
		
.navigation img{
	top:172px;
	width:40px;
	}	
	
}	

/*TABLET PORTRAIT and iPhone 6 landscape*/
@media only screen and (min-width:569px) and (max-width:768px){	

body{
	min-width:768px;
	}


.portfolio,
.gallery{
	max-width:768px;
	}
	
.container,
.gallery,
.gallery ul,
.gallery li,
.gallery img{
	height:384px;
	}
	
.navigation{
	bottom:384px;
	max-width:768px;
	max-height:384px;
	margin:0 auto -384px auto;
	}
		
.navigation img{
	top:172px;
	width:40px;
	}
}


/*=== SMARTHPHONE iPhone 4, iPhone 5, iPhone 6 portrait===*/
@media only screen and (max-width:568px){
		
body{
	min-width:320px; /*smartphone portrait*/
	}	

header, .site-header{
	height:auto;
	overflow:auto;
	min-width:0;
	}
	
.branding{
	min-height:80px;
	width:80%;
	}
	
.branding h1{
	font-size:2em;
	padding-left:10px;
	}
	
.toggle-menu{
	display:block;
	width:20%;
	min-height:80px;
	float:left;
	}
	
.box-button{
	height:40px;
	width:40px;
	margin:20px auto;
	background-color:#a69d65;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	cursor:pointer;
	box-sizing:border-box;
	border:1px solid #fff;
	}
	
.box-button span{
	position:relative;
	top:5px;
	display:block;
	margin:4px auto;
	width:30px;
	height:4px;
	background-color:#fff;
	border-radius:2px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	}	
		
.main-menu{
	clear:both;
	width:100%;
	display:none;
	height:auto;
	}
	
.main-menu ul{
	padding:15px 0;
	margin:0 auto;
	text-align:center;
	display:block;
	}
	
.main-menu li,
.main-menu a{
	display:block;
	}
	
.main-menu li{
	margin:10px 0;
	}
	
.main-menu li:nth-child(4){
	margin:0;
	}
	
.portfolio h1,
.about h1,
.contact h1{
	font-size:1.8em;
	}
	
.navigation{
	display:none;
	}
	
.container,
.gallery,
.gallery ul,
.gallery li{
	width:100% !important;
	max-height:none;
	height:auto;
	}	
	
.gallery li{
	display:block;
	}
	
.gallery img{
	width:100%;
	height:auto;
	}
		
	
.about,
.contact,
footer{
	width:90%;
	min-width:0;
	}	

}
			
</style>

</head>

<body>
	
    <!-- HEADER -->
	<header>
    	<div class="site-header">
            <div class="branding">
            	<h1><a href="#">Santiago Gomez</a></h1>
            </div><!-- branding -->
            
            <div class="toggle-menu">
            	<div class="box-button">
                	<span></span>
                    <span></span>
                	<span></span>
                </div>
            </div><!-- togglr-menu -->
            
            <nav class="main-menu">
            	<ul>
                	<li><a id="portfolio-link" href="#">PORTFOLIO</a></li>
                	<li><a id="about-link" href="#">ABOUT ME</a></li>
                	<li><a id="contact-link" href="#">CONTACT</a></li>
                </ul>
            </nav><!-- main-menu -->
        </div><!-- site-header-->
    </header>

	<!-- GALLERY -->
    <div class="portfolio">
    	<h1>PORTFOLIO</h1>
        <div class="container">
            <div class="gallery">
                <ul style="width:16720px;">
                    
                    <li class="active"><img src="img/portfolio/santiago-gomez-01.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-02.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-03.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-04.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-05.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-06.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-07.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-08.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-09.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-10.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-11.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-12.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-13.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-14.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-15.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-16.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-17.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-18.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-19.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-20.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-21.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-22.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-23.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-24.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-25.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-26.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-27.jpg"></li>
					<li><img src="img/portfolio/santiago-gomez-28.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-29.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-30.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-31.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-32.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-33.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-34.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-35.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-36.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-37.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-38.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-39.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-40.jpg"></li>
                    <li><img src="img/portfolio/santiago-gomez-41.jpg"></li>
                    
                </ul>
            </div><!-- gallery -->
            
            <div class="navigation">
                <div class="nav-left">
                    <img src="img/left-arrow.svg" />
                </div><!-- nav-left -->
                
                <div class="nav-right">
                    <img src="img/right-arrow.svg" />
                </div><!-- nav-right -->	
            </div><!-- navigation -->
            
        </div><!-- container -->
	</div><!-- portfolio -->
    
    <div class="about">
		<h1>ABOUT ME</h1>
        
        <p>I'm a tireless and passionate Colombian model currently living in San Francisco bay area. I love what I do and that's why I'm committed to give it all on scene. I've been modelling for over 7 years, doing fashion photoshoots, fashion shows and lifestyle. For bookings in Colombia: <a href="http://wearemodels.co" target="_blank">wearemodels</a></p>
   	
    </div><!-- about -->
    
    <div class="contact">
    	<h1>CONTACT</h1>
        <div class="contact-status">
        	<p><?php if(isset($status_message)){echo $status_message;} else{echo "Fields marked * are required. Your information won&#39;t be published.";}?></p>
        </div><!-- form-status -->
    	<form id="contact" method="POST" action="<?php echo $_SERVER['REQUEST_URI'] ?>#contact">
        	<input name="myname" type="text" placeholder="* Your Name" value="<?php if(isset($myname)){echo $myname;}?>"/>
            <input name="myemail" type="text" placeholder="* you@youremail.com" value="<?php if(isset($myemail)){echo $myemail;}?>"/>
            <textarea name="mymessage" placeholder="Your message..."><?php if(isset($mymessage)){echo $mymessage;}?></textarea>
            <input name="send" type="submit" value=" ">
            
            <div class="social">
            	<ul>
                	<li><a href="http://www.facebook.com/santiagogomezl" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="http://www.instagram.com/santiagogomezl" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div><!-- social -->
        </form>
    </div><!-- contact -->
    
    <footer>
    	<p>&copy; 2014 Santiago Gomez. All rights reserved</p>
    </footer>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		
		var windowState='large';
		var sw=document.body.clientWidth;
		if(sw<569){
			smLayout();	
		}else if(sw>=569 && sw <=768){
			mdLayout();	
		}else{
			lgLayout();	
		}
	
	
		$(window).resize(function(){
		var sw=document.body.clientWidth;
		if(sw<=568 && windowState!='small'){
			smLayout();	
		}
		if(sw>=569 && sw<=768 && windowState!='medium'){
			mdLayout();	
		}
		if(sw>769 && windowState!='large'){
			lgLayout();	
		}
		});
	
		function smLayout(){			
			windowState='small';
			$('.main-menu').removeClass('toggled').css('display','none');
			$('.box-button').css('background-color','#a69d65').css('border','1px solid #fff');;
			$('.box-button span').css('background-color','#fff');
		}
		
		function mdLayout(){
			windowState='medium';
// 			ulWidth()
			ul_width = 13376;
			gallery_width = 768;
				number_pics = 3;
			$('.main-menu').removeClass('toggled').css('display','table');	
		}
		
		function lgLayout(){	
			windowState='large';
// 			ulWidth()
			ul_width = 16720;
			gallery_width = 1024;
			number_pics = 4;
			$('.main-menu').removeClass('toggled').css('display','table');	
			
		}
		
		//ul gallery width
		
		/*
		function ulWidth(){
			ul_width = 16720;
			$('.gallery img').each(function(index, element) {
				ul_width += $(this).width(); 
			});	

			$('.gallery ul').css('width',ul_width+'px');
		}
		*/
		
		
		//Move gallery right
		function moveRight(){
		
				//gallery current pos	
				var my_pos = $('.gallery').scrollLeft();
				//current img width i.e li width
				var my_width = $('li.active').width();
				//classes swapping and animation
				if($('.gallery ul li:nth-last-child('+number_pics+')').hasClass('active')){
					$('li.active').removeClass('active');
					$('.gallery ul li:first').addClass('active');
					$('.gallery').animate({scrollLeft:0}, 400);	
				}else{
					$('li.active').removeClass('active').next().addClass('active');			
					$('.gallery').animate({scrollLeft:my_pos + my_width},400);
				}
					
		}
		
		//move gallery left
		function moveLeft(){
				//gallery current pos	
				var my_pos = $('.gallery').scrollLeft();
				//left img width
				var left_width = $('li.active').prev().width();
				//classes swapping and animation
				if($('.gallery ul li:first-child').hasClass('active')){
					$('li.active').removeClass('active');
					$('.gallery ul li:nth-last-child('+number_pics+')').addClass('active');
					$('.gallery').animate({scrollLeft:ul_width - gallery_width}, 400);		
				}else{
					$('li.active').removeClass('active').prev().addClass('active');	
					$('.gallery').animate({scrollLeft:my_pos - left_width}, 400);	
				}
				
		}
		
		//move gallery with keyboard
		$(document.documentElement).keyup(function (event) {
			
			//to right
			if (event.keyCode == 39) {
				moveRight();
			}			
			//to left
			else if (event.keyCode == 37) {
				moveLeft();
			}
			
		});
		
		//Move gallery when click on arrows
		$('.nav-right img').click(function(e) {
            moveRight();
        });
		
		$('.nav-left img').click(function(e) {
            moveLeft();
        });
		
		//arrows opacity
		$('.navigation img').hover(function(){
			$(this).animate({opacity:1.0},200);
			},function(){
			$(this).animate({opacity:0.7},200);	
		});
		
		//toggle menu
		$('.box-button').click(function(e) {
        	displayMenu();  
        });
		
		function displayMenu(){
			if($('.main-menu').hasClass('toggled')){
				$('.main-menu').stop().slideUp(400).removeClass('toggled');
				$('.box-button').css('background-color','#a69d65').css('border','1px solid #fff');;
				$('.box-button span').css('background-color','#fff');
			}else{
				$('.main-menu').stop().slideDown(400).addClass('toggled'); 
				$('.box-button').css('background-color','#fff').css('border','1px solid #a69d65');
				$('.box-button span').css('background-color','#a69d65');
			}	
		}
		
		//Scroll to sections
		$('.main-menu a').click(function(e) {
            e.preventDefault();
			var link_id =$(this).attr('id');
			var section_class = link_id.replace('-link','');
			$('html, body').stop().animate({
				scrollTop: $('.'+section_class+'').offset().top-90
			}, 2000);
			if(document.body.clientWidth <=568 ){
				displayMenu();		
			}
        });
	
				
	});

</script>
</body>
</html>