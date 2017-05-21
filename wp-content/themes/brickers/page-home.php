<?php
/**
 Template Name: Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brickers
 */

get_header(); ?>

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed debitis suscipit iure ullam doloribus officia, earum maxime temporibus accusantium reiciendis asperiores molestias fuga quia itaque corporis pariatur, neque, velit ex impedit iste cupiditate voluptatibus esse. Distinctio quidem nostrum dolores fugit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed debitis suscipit iure ullam doloribus officia, earum maxime temporibus accusantium reiciendis asperiores molestias fuga quia itaque corporis pariatur, neque, velit ex impedit iste cupiditate voluptatibus esse. Distinctio quidem nostrum dolores fugit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed debitis suscipit iure ullam doloribus officia, earum maxime temporibus accusantium reiciendis asperiores molestias fuga quia itaque corporis pariatur, neque, velit ex impedit iste cupiditate voluptatibus esse. Distinctio quidem nostrum dolores fugit.</p>
        <a class="btn btn-outline-danger red" role="button" href="services.php">Read More</a>
      </div>
      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/services.jpg" alt="menu-items" class="img-fluid">
      </div>
    </div>
  </div>
</section>


<section id="main-tabs">
  <div class="container">
    <div class="row">
        <div id="tab-container" class="tab-container">
          <ul class='etabs'>
            <li class='tab'><a href="#tabs1">Local Food</a></li>
            <li class='tab'><a href="#tabs2">Restaurant Style</a></li>
            <li class='tab'><a href="#tabs3">Favourite Picks</a></li>
          </ul>
          <div id="tabs1">
              <ul class="list-unstyled d-flex mx-auto">
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/1.jpg" alt="food" class="img-fluid"/></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/2.jpg" alt="food" class="img-fluid"/></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/3.jpg" alt="food" class="img-fluid"/></li>
                <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/4.jpg" alt="food" class="img-fluid"/></li>
            </ul>
          </div>
          <div id="tabs2">
            <ul class="list-unstyled d-flex mx-auto">
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/4.jpg" alt="food" class="img-fluid"/></li>
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/5.jpg" alt="food" class="img-fluid"/></li>
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/6.jpg" alt="food" class="img-fluid"/></li>
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/7.jpg" alt="food" class="img-fluid"/></li>
          </ul>
          </div>
          <div id="tabs3">
            <ul class="list-unstyled d-flex mx-auto">
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/7.jpg" alt="food" class="img-fluid"/></li>
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/1.jpg" alt="food" class="img-fluid"/></li>
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/3.jpg" alt="food" class="img-fluid"/></li>
              <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/5.jpg" alt="food" class="img-fluid"/></li>
          </ul>
          </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
