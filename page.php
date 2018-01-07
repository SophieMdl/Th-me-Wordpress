<?php get_header(); ?>
<div id="page">
    <div class="white-border-top"></div>
    <?php include('menu.php') ?>
    <div class="page-content">
        <!-- contenu de la page -->
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
              <div class="the-content">
              <?php the_content(); ?>
              </div>
        <?php endwhile; ?>
      <?php endif; ?>
        <!-- fin contenu de la page -->

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
    <div class="white-border-bottom"></div>
</div>
<?php get_footer(); ?>