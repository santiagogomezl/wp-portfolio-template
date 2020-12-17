<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package santiagogomezl
 */

get_header();
?>

    <!-- 404 ERROR -->
    <div class="error-404">
        <div class="error-container">
            <h1>Boomer... This page was not found</h1>
            <p>Try going back to my <a href="<?php echo site_url(); ?>/home">home</a> page</p>
        </div><!-- error-container -->
    </div><!-- error-404 -->
<?php get_footer();?>