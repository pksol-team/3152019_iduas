<?php
/*
	Template Name: Home Page Template
*/
get_header(); ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- The slideshow -->
  <div class="carousel-inner">
      <?php if (get_field('slider_image')): ?>
         <?php $index = 0; while (has_sub_field('slider_image')): $index++; ?>
            <?php if (get_row_layout() == 'image_row'): ?>
               <div class="carousel-item <?php if($index == 1) echo 'active'; ?>">
                 <img class="main-backgroud-slider" src="<?php the_sub_field('image') ?>" alt="Los Angeles">
               </div>                  
            <?php endif ?>                                  
         <?php endwhile ?>
      <?php endif ?>
   </div>
   <!-- End slideshow -->
</div>

<main id="content" class="home-content">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="entry-content">
         <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
         <?php the_content(); ?>
         <div class="entry-links"><?php wp_link_pages(); ?></div>
      </div>
   </article>
   <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
   <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>



