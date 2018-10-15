<?php /* Template Name: Work Template */ ?>

<div id="container">

<div class="headerBannerTwo">
    <?php get_header(); ?>
</div>

    <div style="clear:both;"></div>

<div class="ourWorkContainer">

    <?php
    $websites = new WP_Query(array(
    'post_type' => 'website',
    'showposts' => -1,
    'order'		=> 'DESC',
    ));

    while ( $websites->have_posts() ) : $websites->the_post(); ?>
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

    <div id="ourWorkProjects">
        <div class="projects" style="background: linear-gradient( rgba(35, 38, 43, 1), rgba(255, 255, 255, 0.2) ), url(<?php echo $src[0]; ?>) no-repeat; background-size: cover; background-position: center;">
            <p><?php the_title() ?></p>
            <a href="<?php the_permalink() ?>">VIEW</a>
        </div>
    </div>

    <?php endwhile; ?>
</div>

<div style="clear: both"></div>

<?php get_footer(); ?>

</div>