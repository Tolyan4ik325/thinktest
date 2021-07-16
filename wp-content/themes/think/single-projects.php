<?php
/**
 * The template for displaying single project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package think
 */

get_header();
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
                        $terms = get_the_terms( get_the_ID(), 'project-type' );
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

<?php
get_footer();
