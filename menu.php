<?php get_header(); ?>
  <header class="site-header">
      <div id="logo">
          <a href=<?php echo esc_url(home_url( '/' ) ); ?> rel="home">
              <img alt="logo-placeminute" src="<?php echo get_template_directory_uri(); ?>/img/logo_pm.png" />
          </a>
      </div>
      <nav id="main-menu">
          <ul class="menu">
              <li class="menu-item">
                  <a href=<?php echo esc_url(home_url( '/billetterie' ) ); ?>>
                      <span class="icon icon-menu-billetterie"></span>
                      <span>Billetterie</span>
                  </a>
                  <div class="icon-collapsible">
                    <span class="icon-arrow-bottom"></span>
                  </div>
                  <ul class="sub-menu sub-menu-close">
                      <?php wp_nav_menu(array('theme_location' => 'billetterie')); ?>
                  </ul>
              </li>
              <li class="menu-item">
                  <a href="<?php echo esc_url(home_url( '/gestion' ) ); ?>">
                      <span class="icon icon-menu-gestion"></span>
                      <span>Gestion</span>
                  </a>
                  <div class="icon-collapsible">
                      <span class="icon-arrow-bottom"></span>
                  </div>
                  <ul class="sub-menu sub-menu-close">
                      <?php wp_nav_menu(array('theme_location' => 'gestion')); ?>
                  </ul>
              </li>
              <li class="menu-item">
                  <a href=<?php echo esc_url(home_url( '/communication' ) ); ?>>
                      <span class="icon icon-menu-communication"></span>
                      <span>Communication</span>
                  </a>
                  <div class="icon-collapsible">
                      <span class="icon-arrow-bottom"></span>
                  </div>
                  <ul class="sub-menu sub-menu-close">
                      <?php wp_nav_menu(array('theme_location' => 'communication')); ?>
                  </ul>
              </li>
              <li class="menu-item">
                  <a href=<?php echo esc_url(home_url( '/avantages' ) ); ?>>
                      <span class="icon icon-menu-avantages"></span>
                      <span>Avantages</span>
                  </a>
                  <div class="icon-collapsible">
                      <span class="icon-arrow-bottom"></span>
                  </div>
                  <ul class="sub-menu sub-menu-close">
                      <?php wp_nav_menu(array('theme_location' => 'avantages')); ?>
                  </ul>
              </li>
          </ul>
          <ul class="menu last-items">
              <li class="menu-item flag-item tablet">
                  <a href="http://#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/FR_flag.svg" />
                  </a>
                  <a href="http://#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/EN_flag.svg" />
                  </a>
              </li>
              <li class="menu-item tablet"><a href="http://www.placeminute_refonte.dev7/tarifs/">Tarifs</a></li>
              <li class="menu-item smartphone"><a href="http://www.placeminute_refonte.dev7/connexion-2/">Connexion</a></li>
              <li class="menu-item smartphone button-connexion"><a href="http://www.placeminute_refonte.dev7/connexion/">Inscription gratuite</a></li>
          </ul>
      </nav>

      <nav id="secondary-menu">
          <ul class="menu">
              <li class="menu-item flag-item not-tablet">
                  <a href="http://#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/FR_flag.svg" />
                  </a>
                  <a href="http://#">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/EN_flag.svg" />
                  </a>
              </li>
              <li class="menu-item not-tablet"><a href="http://www.placeminute_refonte.dev7/tarifs/">Tarifs</a></li>
              <li class="menu-item not-smartphone"><a href="http://www.placeminute_refonte.dev7/connexion-2/">Connexion</a></li>
              <li class="menu-item not-smartphone button-connexion"><a href="http://www.placeminute_refonte.dev7/connexion/">Inscription gratuite</a></li>
          </ul>
      </nav>
      <span class="icon-menu-hamburger" id="icon-menu"></span>
  </header>