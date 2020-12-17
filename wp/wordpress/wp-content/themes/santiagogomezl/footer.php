<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package santiagogomezl
 */
?>

<?php wp_footer(); ?>

<footer>
    <p>&copy; 2014 Santiago Gomez. All rights reserved</p>
</footer>


<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64561903-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
