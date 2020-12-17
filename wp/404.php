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
	width:auto;
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

/*=== 404 ERROR ===*/
.error-404{
	width:70%;
	min-width:0;
	height:400px;
	margin:0 auto;
	display:table;
	}
	
.error-container{
	text-align:center;
	display:table-cell;
	vertical-align:middle;
	}
	
.error-404 h1{
	font-family: 'Mohave-Bold';
	font-size:2.5em;
	}
	
.error-404 p{
    font-family: 'Raleway-Regular';
	text-transform:uppercase;
	font-size:1.2em;
	}
	
.error-404 a{
	color:#a69d65;		
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
footer,
.error-404{
	width:90%;
	min-width:0;
	}	

.error-404{
	width:90%;
	height:400px;
	margin:0 auto;
	display:table;
	}
}


			
</style>

</head>

<body>

	<!-- 404 ERROR -->
    <div class="error-404">
    	<div class="error-container">
            <h1>Boomer... This page was not found</h1>
            <p>Try going back to my <a href="/home">home</a> page</p>
        </div><!-- error-container -->
    </div><!-- error-404 -->

</body>
</html>