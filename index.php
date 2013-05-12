<?php get_header(); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
		<?php global $slidecount;
		$args = array( 
			'posts_per_page' => 3,
			'post_type' => 'slides'	
		);
		$slider = new WP_Query( $args );
		if ( $slider->have_posts() ) : while ( $slider->have_posts() ) : $slider->the_post(); if ( ++$slidecount > 3 ) continue; ?>
		<div class="item<?php if ( $slidecount == 1 ) echo ' active'; ?>">
          <?php the_post_thumbnail();?>
          <div class="container">
            <div class="carousel-caption">
              <h1><?php the_title(); ?></h1>
              <p class="lead"><?php the_content() ?></p>
              <a class="btn btn-large btn-primary" href="#"><?php echo $slidecount; ?></a>
            </div>
          </div>
        </div>
		<?php endwhile; endif; ?>
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
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if( !is_singular() ){ ?>
					<h2><a class="article-title page-header" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2><?php
					}else{ ?>
					<h1 class="article-title page-header"><?php the_title(); ?></h1>
				<?php } ?>
				<div class="post-content"><?php the_content(); ?></div>
			</article>
        <?php endwhile; // End the loop ?>         
      </div> 
 <?php get_footer() ?>