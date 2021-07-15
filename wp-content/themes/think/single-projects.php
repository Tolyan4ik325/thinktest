<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package think
 */

get_header();
?>

    <!--Banner item-->
    <div id="banner" class="flex items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white">
                        We Build<br>
                        Products<br>
                        Relationships
                    </h1>
                    <p class="desc white mt-4">
                        We are Think, a digital product agency
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="scroll-button text-center">
                <a href="#about">SCROLL</a>
            </div>
        </div>
    </div>
    <main class="container">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'think' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'think' ) . '</span> <span class="nav-title">%title</span>',
                )
            );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </main>

<?php
get_sidebar();
get_footer();
