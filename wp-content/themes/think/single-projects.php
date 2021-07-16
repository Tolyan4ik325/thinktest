<?php
/**
 * The template for displaying single project
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
    <div id="project-banner" style="background: url('<?= get_the_post_thumbnail_url();?>');">
    </div>
    <main id="projects">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <ul class="project-type">
                        <?php
                        foreach($terms as $term) {
                            echo '<li><a href="../project-type/'.$term->slug.'">'.$term->name.'</a></li>';
                        }
                        ?>
                    </ul>

                </div>
                <div class="col-md-6"><h3><?=the_title();?></h3></div>
            </div>
            <?php
                the_content();
            ?>
        </div>
    </main>
    <!--  Next or Previous Project  -->
    <?php if($next_post !== '') { ?>
    <div class="next-post" style="background: url('<?= get_the_post_thumbnail_url($next_post->ID);?>');">
        <div class="info">
            <h4 class="text-center white">Next Project</h4>
            <a rel="next" href="/<?=$next_post->post_name;?>" title="<?=$next_post->post_title;?>" class=" ">
                <h3 class="white text-center"><?= $next_post->post_title; ?></h3>
            </a>
        </div>
    </div>
    <?php }
    else {
        ?>
        <div class="next-post" style="background: url('<?= get_the_post_thumbnail_url($previous_post->ID);?>');">
            <div class="info">
                <h4 class="text-center white">Previous Project</h4>
                <a rel="next" href="/<?=$previous_post->post_name;?>" title="<?=$previous_post->post_title;?>" class=" ">
                    <h3 class="white text-center"><?= $previous_post->post_title; ?></h3>
                </a>
            </div>
        </div>
        <?php
    }

    get_footer();
