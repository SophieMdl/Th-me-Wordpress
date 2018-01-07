<?php
/*
Template Name: Template-home
*/
?>
<?php get_header(); ?>
<div id="homepage">
    <!-- le menu est que dans le header pour pouvoir charger un background différent en fonction de la page -->
    <div id="home-intro">
    <?php include('menu.php') ?>
    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
        <div class="intro-w">
            <h1><?php the_title(); ?></h1>
            <div class="pink-button">
                <a href="#">
                <span class="text">Débuter gratuitement</span>
                <div class="end-button">
                    <span class="border-dashed"></span>
                    <span class="icon-arrow-right"></span>
                </div>
                </a>
            </div>
        </div>
        <a href="#home-content" class="scroll-to link-bottom">
            <span class="icon-arrow-bottom"></span>
        </a>
        <div class="partners-border"></div>
        <div class="partners">
            <div class="img-w">
                <img alt="logo-coca" src="<?php echo get_template_directory_uri(); ?>/img/logo_coca.png" />
            </div>
            <div class="img-w">
                <img alt="logo-crazyjack" src="<?php echo get_template_directory_uri(); ?>/img/logo_crazyjack.png" />
            </div>
            <div class="img-w">
                <img alt="logo-com2daddy" src="<?php echo get_template_directory_uri(); ?>/img/logo_com2daddy.png" />
            </div>
            <div class="img-w not-smartphone">
                <img alt="logo-tdelighted" src="<?php echo get_template_directory_uri(); ?>/img/logo_tdelighted.png" />
            </div>
            <div class="img-w not-smartphone">
                <img alt="logo-gibus" src="<?php echo get_template_directory_uri(); ?>/img/logo_gibus.png" />
            </div>
            <div class="img-w not-tablet">
                <img alt="logo-coca" src="<?php echo get_template_directory_uri(); ?>/img/logo_coca.png" />
            </div>
            <div class="img-w not-tablet">
                <img alt="logo-com2daddy" src="<?php echo get_template_directory_uri(); ?>/img/logo_com2daddy.png" />
            </div>
            <div class="img-w not-tablet">
                <img alt="logo-crazyjack" src="<?php echo get_template_directory_uri(); ?>/img/logo_crazyjack.png" />
            </div>
            <div class="img-w not-tablet">
                <img alt="logo-tdelighted" src="<?php echo get_template_directory_uri(); ?>/img/logo_tdelighted.png" />
            </div>
            <div class="img-w not-tablet">
                <img alt="logo-gibus" src="<?php echo get_template_directory_uri(); ?>/img/logo_gibus.png" />
            </div>
        </div>
    </div>
    <div id="home-content">
        <div class="main-content">
            <?php the_content(); ?>
        </div>
        <div class="white-border-bottom"></div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

</div>
<?php get_footer(); ?>

