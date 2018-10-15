<?php /* Template Name: Home Template */ ?>

<div id="container">

<?php get_header(); ?>

<div style="clear: both"></div>

<div class="headerBanner" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo get_template_directory_uri();?>/img/parallax-image-6.jpeg') no-repeat; background-position: center; background-size: cover;">
    <div class="bannerTitle">
        <h1>I'm Josh - a Web Developer</h1>
        <a href="<?php echo home_url(); ?>/my-work">VIEW MY WORK</a>
    </div>
</div>

<div style="clear: both"></div>

    <div id="whyChoose" class="wrapper">
        <h1>A bit about me...</h1>
        <p>I am a <strong style="font-family: proxima_novabold; color: orange">professional freelance web developer</strong> from Hertfordshire, UK. I started off working for a small, but rapidly growing,
            web agency in Hemel Hempstead which is where I first gained Web Development experience. Since then I have taken on a
            number of <strong style="font-family: proxima_novabold; color: orange">different freelance projects</strong> and my experience, as well as my portfolio, has grown by the day.
            <br><br>
            I thoroughly enjoy my work especially when it means I am able to <strong style="font-family: proxima_novabold; color: orange">build long-term relationships</strong> with great clients! I am
            always looking for exciting ventures and love taking on <strong style="font-family: proxima_novabold; color: orange">new challenges,</strong> whether they be big or small...
        </p>
    </div>

<div style="clear: both"></div>

    <div id="firstParallax">

    </div>

<div style="clear: both"></div>

<div class="ourWorkContainer">
    <div id="ourWork">
        <h1>My Work</h1>
    </div>

    <?php
    $websites = new WP_Query(array(
    'post_type' => 'website',
    'showposts' => 3,
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

<div id="ourWorkView">
    <a href="<?php echo home_url(); ?>/my-work">VIEW THEM ALL <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>

<div id="whyChoose" class="wrapper">
    <h1>Why me?</h1>

    <div id="whyChooseCircles">
        <div class="circlesContainer">
            <div class="circles sweep">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <h1>Work To Deadlines</h1>
            <p>I take great pride in <strong style="font-family: proxima_novabold; color: orange">meeting deadlines</strong> that I set for my clients. Too often do Developers over promise and
            under deliver on timescales - I believe I am someone who <strong style="font-family: proxima_novabold; color: orange">bucks that trend!</strong></p>
        </div>
        <div class="circlesContainer">
            <div class="circles">
                <i class="fa fa-code" aria-hidden="true"></i>
            </div>
            <h1>Bespoke Code</h1>
            <p>Nearly all projects I undertake are coded <strong style="font-family: proxima_novabold; color: orange">completely from scratch</strong>. This means that your website will be <strong style="font-family: proxima_novabold; color: orange">completely
            unique</strong> and there will be nothing like it out there on the web!</p>
        </div>
        <div class="circlesContainer">
            <div class="circles">
                <i class="fa fa-gbp" aria-hidden="true"></i>
            </div>
            <h1>Fairly Priced</h1>
            <p>All my work is done at an <strong style="font-family: proxima_novabold; color: orange">agreed price</strong> by both parties. When taking on work, I like to think I am <strong style="font-family: proxima_novabold; color: orange">working with you</strong>,
            not for you, so it is important that everyone is happy with costs involved from the outset!</p>
        </div>
    </div>
</div>

<div style="clear: both"></div>

<div id="secondParallax">

</div>

<div style="clear: both"></div>

    <div id="ourWork">
        <h1>Thomson Website Solutions</h1>
    </div>

<div id="whyChoose" class="wrapper">
    <p>This is a Web Development service dedicated solely to the <strong style="font-family: proxima_novabold; color: orange">Optics Industry</strong>. Co-founded with Prof David Thomson, who
        has over 35 years experience, we have created a company that provides <strong style="font-family: proxima_novabold; color: orange">stunning websites</strong> and has <strong style="font-family: proxima_novabold; color: orange">exceptional
        optical knowledge</strong>, which we believe is pivotal when providing Opticians with a presence on the web!
    </p>
    <a href="http://www.thomson-website-solutions.com" target="_blank">VISIT TWS HOME</a>
</div>

<div style="clear: both"></div>

<div class="ourWorkContainer">

    <?php
    $opticians = new WP_Query(array(
    'post_type' => 'optician',
    'showposts' => 3,
    'order'		=> 'DESC',
    ));

    while ( $opticians->have_posts() ) : $opticians->the_post(); ?>
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

    <div id="ourWorkProjects">
        <div class="projects" style="background: linear-gradient( rgba(0, 0, 0, 0.9), rgba(255, 255, 255, 0.2) ), url(<?php echo $src[0]; ?>) no-repeat; background-size: cover; background-position: center;">
            <p><?php the_title() ?></p>
            <a href="<?php the_permalink() ?>">VIEW</a>
        </div>
    </div>

<?php endwhile; ?>

</div>

<div style="clear: both"></div>

<div id="ourWorkView">
    <a href="<?php echo home_url(); ?>/tws-work">VIEW ALL TWS WORK <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</div>

<div id="ourWorkProjectsText" class="slider wrapper">
    <div>
        <p>"Very professional service!"
        </p>
        <p>Tenterden Opticians</p>
    </div>
    <div>
        <p>"We have worked with Josh on many projects and have found him to be reliable and flexible."</p>
        <p>The Optic Shop</p>
    </div>
    <div>
        <p>"Would highly recommend to anyone looking to get started on the web"</p>
        <p>Brunker Opticians</p>
    </div>
</div>

<?php get_footer(); ?>

</div>