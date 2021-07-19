<!-- header -->

<?php get_header();?>

<!--Banner item-->
<div id="banner" class="flex items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="white">
                    We Build<br>
                    <span class="line-through">Products</span><br>
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
<!--About us-->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="white">A digital product agency</h2>
                <p class="desc white mt-4 mb-5">
                    Combining a strategic approach, strong technical focus and a keen sense of design; we pour   passion into every project we undertake, be it web design or mobile app development, and turn your every digital project into a competitive advantage.
                </p>
                <a href="#" class="button-1">About Us</a>
            </div>
        </div>
        <div class="row services">
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/dev-mobile-app.png');">
                    <div class="info">
                        <h3 class="white">
                            Develop Mobile App
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/dev-a-website.png');">
                    <div class="info">
                        <h3 class="white">
                            Develop <br> a Website
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/start-selling-online.png');">
                    <div class="info">
                        <h3 class="white">
                            Start Selling Online
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/sryc.png');">
                    <div class="info">
                        <h3 class="white">
                            Start Rewarding your customers
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/increase-online-traffic.png');">
                    <div class="info">
                        <h3 class="white">
                            Increase Online Traffic
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/digital-business.png');">
                    <div class="info">
                        <h3 class="white">
                            Digital Business Transformation
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/digital-brand.png');">
                    <div class="info">
                        <h3 class="white">
                            Refine your Digital Brand
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-4">
                <div class="item" style="background: url('/wp-content/themes/think/images/services/our-work.png');">
                    <div class="info">
                        <h3 class="white">
                            Develop Mobile App
                        </h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Projects item-->
<div id="recent-projects">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="dark">Take a look at our most
                    recent projects</h2>
            </div>
        </div>
        <div class="row projects">
            <?php
                $projects = get_posts( array(
                    'numberposts' => get_option('option_set_count')['projects'],
                    'post_type'   => 'projects',
                    'suppress_filters' => true,
                ) );
                foreach( $projects as $project ){
                    setup_postdata($project);
                    ?>

                        <div class="col-md-6 mb-5">
                                <div class="item">
                                    <div class="image-block" style="background-image: url('<?=get_the_post_thumbnail_url($project->ID);?>')">
                                    </div>
                                    <a href="/<?=$project->post_name;?>">
                                        <h3 class="dark">
                                            <?=$project->post_title;?>
                                        </h3>
                                    </a>
                                    <p><?= $project->post_excerpt;?></p>
                                    <ul>
                                        <?php
                                        $terms = get_the_terms( $project->ID, 'project-type' );
                                        foreach($terms as $term) {
                                            echo '<li><a href="../archives/project-type/'.$term->slug.'">'.$term->name.'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                    <hr>
                                </div>

                        </div>

                <?php } ?>
        </div>
        <div class="row">
            <div class="text-center mt-4">
                <a href="#" class="button-1">See more projects</a>
            </div>
        </div>
    </div>
</div>
<!--Journal Section-->
<div id="journal">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="dark">Journal</h2>
                <p class="desc dark mt-4 mb-5">
                    We like to keep up-to-date with all the latest trends in our field. Follow our blog to find out the things that interest our team.
                </p>
            </div>
        </div>
        <div class="jouranls row mb-5">
            <?php
            $posts = get_posts( array(
                'numberposts' => get_option('option_set_count')['journals'],
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );
            foreach( $posts as $post ){
            setup_postdata($post);
            ?>
                <div class="col-md-4">

                    <div class="item">
                        <div class="image-block" style="background-image: url('<?=get_the_post_thumbnail_url($post->ID);?>">
                        </div>
                        <span class="date"><?= get_the_date('d.m.Y'); ?></span>
                        <a href="/<?=$post->post_name;?>">
                            <h5><?=$post->post_title;?></h5>
                        </a>
                        <p><?=$post->post_excerpt;?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="text-center mt-4">
                <a href="#" class="button-1">See more journals</a>
            </div>
        </div>
    </div>
</div>
<!--Partners section-->
<div id="partners">
    <div class="container">
        <h5 class="text-center mb-5">We work with the best</h5>
        <div class="flex flex-wrap justify-content-center">
            <div>
                <img src="wp-content/themes/think/images/partners/mariner.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/montekristo.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/tigne-point.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/methode-electronics.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/ksi-malta.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/mariner.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/montekristo.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/tigne-point.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/methode-electronics.svg" alt="">
            </div>
            <div>
                <img src="wp-content/themes/think/images/partners/ksi-malta.svg" alt="">
            </div>
        </div>
    </div>
</div>

<!--Footer-->

<?php get_footer();?>