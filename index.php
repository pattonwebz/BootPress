<?php 
/** 
 * The main template 
 * 
 * This is used as the default file if no other alternitive is specified 
 * 
 */ 
?> 
<html> 
  <head> 
    <title><?php wp_title() ?></title> 
  </head> 
  <div id="wrapper"> 
    <div class="main"> 
      <div id="branding"> <!-- start of site the header --> 
        <span class="header"> 
          <h1><?php echo get_bloginfo ( 'title' ); ?></h1> 
        </span> 
        <span class="tagline"> 
          <h2><?php echo get_bloginfo ( 'description' ); ?></h2> 
        </span> 
      </div>  <!-- #branding -->  
      <div class="content"> 
        <?php // This is the start of our loop ?> 
        <?php while ( have_posts() ) : the_post(); ?> 
          <h2 class="post-title"><?php the_title(); ?></h2> 
          <div class="post-content"><?php the_content(); ?></div> 
        <?php endwhile; // End the loop ?>         
      </div> 
      <div id="footer"> 
        <div class="links"> 
          <ul class="footer-links"> 
            <li><a href="http://www.theme-dev.com/" title="Theme Dev">Theme-Dev</a></li> 
            <li><a href="http://www.pattonwebz.com/" title="PattonWebz">PattonWebz</a></li> 
          </ul> 
        </div> <!-- .links --> 
      </div>  <!-- #footer -->  
    </div> <!-- .main --> 
  </div>  <!-- #wrapper -->  
  <?php // this is the end of our basic page ?>  
</html>