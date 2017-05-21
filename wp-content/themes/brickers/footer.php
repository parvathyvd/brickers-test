<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brickers
 */

?>

<?php
$my_name = "Parvathy Vazhoor";
?>


<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="logo" class="img-fluid" />
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quibusdam provident dolore, commodi alias esse expedita incidunt aut quidem officiis. </p>
      </div>
      <div class="col-md-4 text-center">
        <ul class="list-unstyled d-flex mx-auto social">
          <li><i class="fa fa-3x fa-facebook"></i></li>
          <li><i class="fa fa-3x fa-youtube"></i></li>
          <li><i class="fa fa-3x fa-twitter"></i></li>
          <li><i class="fa fa-3x fa-instagram"></i></li>
      </ul>
      <p class="social-text text-center">Lorem ipsum dolor commodi alias esse expedita incidunt aut quidem officiis. </p>
      </div>
      <div class="col-md-4 store-hours">
        <h4>Store Hours</h4>
        <?php include("includes/storeHours.php"); ?>
      </div>
    </div>
      <div class="row justify-content-center copyright">
      <div class="col-sm-4">
      <small>Designed By <a href="http://parvathy.vd@realwordpressdevelopment.com"><?php echo $my_name;?></a></small>
      </div>
      <div class="col-sm-4">
        <small>&copy; copyright <?php echo Date('Y'); ?>|All rights reserved</small>
      </div>
    </div>
</div>
</footer>

<?php wp_footer(); ?>

<!--javascript and jqurey--->
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquerytabs.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery-hashchange.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery.easytabs.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/ui-bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/javascript/custom.js"></script>

</body>
</html>
