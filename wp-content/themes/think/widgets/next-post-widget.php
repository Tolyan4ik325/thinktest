<?php

//Register new widget for net post

class wpb_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

// Base ID of your widget
            'wpb_widget',

// Widget name will appear in UI
            __('Similar posts', 'wpb_widget_domain'),

// Widget description
            array( 'description' => __( 'Sample widget for show similar posts', 'wpb_widget_domain' ), )
        );
    }

// Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes
        echo $args['before_widget'];

// This is where you run the code and display the output
        // Next Post
        $next_post = get_next_post();
        // Previous Post
        $previous_post = get_previous_post();
        // Next or Previous Project
        if($next_post !== '') { ?>
            <div class="widget">
                <div class="image-block" style="background-image: url('<?=get_the_post_thumbnail_url($next_post->ID);?>')">

                </div>
                <div class="info">
                    <span class="date"><?= get_the_date('d.m.Y'); ?></span>
                    <a rel="next" href="/<?=$next_post->post_name;?>" title="<?=$next_post->post_title;?>" class=" ">
                        <h3><?=$next_post->post_title;?></h3>
                    </a>
                    <p><?=$next_post->post_excerpt;?></p>
                </div>
            </div>
        <?php }
        else {
            ?>
            <div class="widget">
                <div class="image-block" style="background-image: url('<?=get_the_post_thumbnail_url($previous_post->ID);?>')">

                </div>
                <div class="info">
                    <span class="date"><?= get_the_date('d.m.Y'); ?></span>
                    <a rel="next" href="/<?=$previous_post->post_name;?>" title="<?=$previous_post->post_title;?>" class=" ">
                        <h3><?=$previous_post->post_title;?></h3>
                    </a>
                    <p><?=$previous_post->post_excerpt;?></p>
                </div>
            </div>
            <?php
        }
        ?>
        <?php

        echo $args['after_widget'];
    }

// Widget Backend
    public function form( $instance ) {

// Widget admin form
        ?>
        <p>
            Add this to sidebar
        </p>
        <?php
    }



// Class wpb_widget ends here
}