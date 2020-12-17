<?php include('includes/process.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Model Santiago Gomez">
<meta name="keywords" content="model,modelling,colombian,colombian model,male model,fashion model,">
<meta name="author" content="Santiago Gomez">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image/png" href="images/santiagogomez-logo.png">
<?php include('includes/assets.php');?>

<?php
if(($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_POST['send']))):
	echo 
	"<script type='text/javascript'>
	$(document).ready(function(){
	if($(window).width()<=480){
		$('html, body').animate({
        scrollTop: $('div#contact').offset().top-120
		}, 10);	
	}
	else{
		$('html, body').animate({
        scrollTop: $('div#contact').offset().top-80
		}, 10);	 
	}
	 });
	</script>";
endif;			
?>
<title>Santiago Gomez</title>
</head>
<body>
	<div id="header">
    	<div id="title">
        	<a href="index.php"><h1>Santiago Gomez</h1></a>
        </div>
        <div id="menu">
        	<ul>
            	<li id="link-gallery">portfolio</li>
                <li id="link-about">about me</li>
                <li id="link-contact">contact</li>
                <!--<li >blog</li>-->
            </ul>
        </div>
    </div>
    
    <div id="content">
    	<div id="gallery"><h1>portfolio</h1></div>
    	<div id="gallery-container">
      
                <ul>
                <?php 
				//print_images();
				?>
<li><img src="images/portfolio/santiago-gomez-01.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-02.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-03.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-04.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-05.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-06.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-07.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-08.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-09.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-10.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-11.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-12.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-13.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-14.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-15.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-16.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-17.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-18.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-19.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-20.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-21.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-22.jpg" alt=""/></li>
<li><img src="images/portfolio/santiago-gomez-23.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-24.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-25.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-26.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-27.jpg" alt=""/></li>  
<li><img src="images/portfolio/santiago-gomez-28.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-29.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-30.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-31.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-32.jpg" alt=""/></li>  
<li><img src="images/portfolio/santiago-gomez-33.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-34.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-35.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-36.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-37.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-38.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-39.jpg" alt=""/></li> 
<li><img src="images/portfolio/santiago-gomez-40.jpg" alt=""/></li>                     
<li><img src="images/portfolio/santiago-gomez-41.jpg" alt="Lookbook Tebanos - Ph: SILVA/MORENO - Styling: Jahir Rueda  - Model by WE ARE MODELS"/></li>
                </ul>
           
       	</div>
       <div id="gallery-scroll">
        	<img id="scroll-left" src="images/arrow-left.png" style="margin-left:20px;"/>
            <img id="scroll-right" src="images/arrow-right.png" style="float:right;margin-right:20px;"/>
        </div>
        <div id="pic-credits"></div>
        
       <div id="about">
        	<h1>about me</h1>
            <p>I&#39;m a tireless and passionate colombian model currently living in San Francisco bay area. I love what I do and that&#39;s why I&#39;m committed to give it all on scene. I&#39;ve been modelling for over 7 years, doing  fashion photography and runways so as lifestyle projects.<br/> 
            for bookings in colombia: <a href="http://wearemodels.co" target="_blank"><span style="color:#A79E65;">wearemodels</span></a></p>
        </div>
          
        <div id="contact">
        	<h1>contact</h1>
            <p id="mailto"><a href="mailto:contact@santiagogomezl.com">contact@santiagogomezl.com</a></p>
            <form id="contact-form" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
            	<label id="label-name" for="input-name">name</label><input id="input-name" name="myname" type="text" placeholder=" your name" value="<?php if(isset($myname)){echo $myname;}?>"/>
                <label id="label-email" for="input-email">email</label><input id="input-email" name="myemail" type="email" placeholder=" you@example.com" name="myemail" value="<?php if(isset($myemail)){echo $myemail;}?>"/><br/>
               	<label id="label-message" for="input-message">message</label><br/>
                <textarea id="input-message" name="mycomment" placeholder=" your message"></textarea><br/>
                <input id="input-submit" name="send" type="submit" value="SUBMIT">
            </form>
            <p><?php if(isset($error_message)){echo $error_message;}?><?php if(isset($sent)){echo $sent;}?></p>
        </div>
    </div>
  
    <div id="social">
        <ul>
            <li><a href="http://facebook.com/santiagogomezl" target="_blank"><img src="images/facebook-gold.png"/></a></li>
            <li><a href="http://twitter.com/santiagogomezl" target="_blank"><img src="images/twitter-gold.png"/></a></li>
            <li><a href="http://instagram.com/santiagogomezl" target="_blank"><img src="images/instagram-gold.png"/></a></li>
        </ul>
    </div>
    
    <div id="footer">
    	<p>&copy; 2014 Santiago Gomez. All rights reserved</p>
    </div> 
</body>
</html>