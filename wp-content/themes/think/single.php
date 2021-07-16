<?php
/**
 * The template for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package think
 */

get_header();
// Custom terms
$terms = get_the_terms( get_the_ID(), 'project-type' );
// Next Post
$next_post = get_next_post();
// Previous Post
$previous_post = get_previous_post();
?>
    <!--Project Banner item-->
    <div id="post-banner" style="background: url('<?= get_field('banner_image', get_the_ID())['url'];?>');">
    </div>
    <main id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3><?=the_title();?></h3>
                    <p class="post-meta">
                        Beppe De Gabriele  |  09.04.2020
                    </p>
                    <?php
                        the_content();
                    ?>
                </div>
                <div class="col-md-4 sidebar">
                    <h5>Continue reading</h5>
                    <div class="widget">
                        <img src="" alt="">
                        <div class="info">
                            <span class="date">02.08.2018</span>
                            <h3>Why Your Customers Want You To Go Digital</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer();?>
