<?php
/*
 * Template Name: Home Page
 * 
 */

get_header();

?>

<!-- GALLERY -->
    <div class="portfolio">
    	<h1>PORTFOLIO</h1>
        <div class="container">
            <div class="gallery">
                <ul style="width:24000px">
                    
                     <?php

                    // 1st Method - Declaring $wpdb as global and using it to execute an SQL query statement that returns a PHP object

                    global $wpdb;
                    $results = $wpdb->get_results( 
                            "
                            SELECT guid 
                            FROM sg_posts 
                            WHERE post_type='attachment' 
                            AND post_mime_type='image/jpeg'
                            AND post_name LIKE 'santiago-gomez%'
                            ", OBJECT
                    );


                    foreach ( $results as $result ) 
                    {
                            echo "<li><img src='{$result->guid}'></li>";
                    }

                    ?>   
                    
                </ul>
            </div><!-- gallery -->
            
            <div class="navigation">
                <div class="nav-left">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/left-arrow.svg" />
                </div><!-- nav-left -->
                
                <div class="nav-right">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/right-arrow.svg" />
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
      
    
<?php get_footer(); ?>