<?php get_header(); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/antennae.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/antennae.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://webdesigntutsplus.s3.amazonaws.com/tuts/342_bootstrap_carousel/Carousel-Files-COMPLETE/img/antennae.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


 </div>
		<nav class="navbar"><?php wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container_class' => 'navbar-inner', 'menu_class' => 'nav' ) ); ?></nav>
      <div class="content"> 
        <?php // This is the start of our loop ?> 
        <?php while ( have_posts() ) : the_post(); ?> 
          <h2 class="post-title"><?php the_title(); ?></h2> 
          <div class="post-content"><?php the_content(); ?></div> 
        <?php endwhile; // End the loop ?>         
      </div> 
      <div id="footer navbar-fixed-bottom"> 
        <div class="footnote"> 
          <p class="text-center">
            <a href="http://www.pattonwebz.com/" title="PattonWebz">BootPress is a project from PattonWebz</a>
          </p> 
        </div> <!-- .links --> 
      </div>  <!-- #footer -->  
	<?php wp_footer(); ?>  
<script type="text/javascript">
	var $ = jQuery.noConflict ();
	$(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000
        });
    });
</script>
  </body>
  
</html>