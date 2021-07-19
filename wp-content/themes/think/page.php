
<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#page
 *
 * @package think
 */

get_header();

?>
<?php
if(is_page()) {
    ?>
    <style>
        #header {
            background: #000;
            padding-bottom: 25px;
        }
    </style>
    <?php
}
?>
    <main id="page">
        <div class="container" style="padding: 120px 0;">
            <?php
			    the_content();
		    ?>
        </div>
    </main>


<?php get_footer(); ?>
