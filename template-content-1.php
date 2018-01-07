<?php
/*
Template Name: Template 1
*/
?>
    <?php get_header(); ?>
    <div id="template-1">

        <!-- HEADER AVEC IMAGE DE FOND -->
        
        <div class="bg-title">
            <?php include('menu.php') ?>
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                <?php if( get_field('intro_title') ): ?>
                <h1><?php the_field('intro_title') ?></h1>
                <?php else: ?>
                <h1><?php the_title(); ?></h1>
            <?php endif; ?>
        </div>
         <!-- FIN HEADER AVEC IMAGE DE FOND  -->

                    <div class="template-content">
                        <div class="white-border-top"></div>
                        <div class="pink-button-top">
                            <a href="#">
                                <span class="text">Créer ma billetterie</span>
                                <div class="end-button">
                                    <span class="border-dashed"></span>
                                    <span class="icon-arrow-right"></span>
                                </div>
                            </a>
                        </div>

                        <!-- DEBUT CONTENU DE LA PAGE -->
                        <div class="page-content">
                            <div class="the-content">
                                <?php the_content(); ?>
                            </div>

                            <!-- Navigation avec tous les liens ancres -->
                            <?php if( have_rows('blocs_wrapper') ): ?>
                            <div class="navigation-w">
                                <div class="navigation-content">
                                    <p>Aller directement à :</p>
                                        <ul class="navigation-items">
                                        <?php while( have_rows('blocs_wrapper') ) : the_row(); ?>
                                            <?php if( get_sub_field('link_id') ): ?>
                                                <li>
                                                    <a href="#<?php the_sub_field('link_id'); ?>" class="scroll-to">
                                                        <span>
                                                            <?php echo the_sub_field('link_name'); ?>
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                        </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            <!-- FIN navigation avec tous les liens ancres -->

                            <!-- Début de la boucle du contenu ACF -->
                            <?php if( have_rows('blocs_wrapper') ): ?>
                                <div class="blocs-wrapper">
                                    <?php while( have_rows('blocs_wrapper') ) : the_row(); ?>

                                        <!-- div avec l'ID pour le lien -->
                                        <?php if( get_sub_field('link_id') ): ?>
                                            <div id="<?php the_sub_field('link_id'); ?>"></div>
                                        <?php endif; ?>

                                        <!-- Titre principal -->
                                        <?php if( get_sub_field('wrapper_title') ): ?>
                                            <h2 class="wrapper-title">
                                                <?php the_sub_field('wrapper_title'); ?>
                                            </h2>
                                        <?php endif; ?>

                                        <?php if( get_sub_field('bloc_title') ): ?>
                                            <div class="bloc">

                                                <!-- chaque image du bloc -->
                                                <div class="bloc-image">
                                                    <?php $image = get_sub_field('bloc_icone'); ?>
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                </div>
                                                <div class="bloc-content">

                                                    <!-- titre de chaque bloc -->
                                                    <h3 class="bloc-title">
                                                        <?php the_sub_field('bloc_title'); ?>
                                                    </h3>
                                                    <div class="clear"></div>

                                                    <!-- paragraphe de chaque bloc -->
                                                    <p class="bloc-text">
                                                        <?php the_sub_field('bloc_content'); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <!-- call to action bas de page -->
                            <div class="call-to-action-w">
                                    <div class="call-to-action-content">
                                    <h4>Simple, rapide et gratuit</h4>
                                    <div class="pink-button">
                                        <a href="#">
                                            <span class="text">Créer ma billetterie</span>
                                            <div class="end-button">
                                                <span class="border-dashed"></span>
                                                <span class="icon-arrow-right"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- fin call to action bas de page -->
                        </div>
                        <!-- FIN CONTENU DE LA PAGE -->

                        <div class="white-border-bottom"></div>
                        </div>
                    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>