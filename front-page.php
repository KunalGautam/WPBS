<?php get_header(); ?>

<?php while ( have_posts() ) : the_post() ?>
	<div class="row">
	
				<div class="col-md-2 align-center height-fix visible-md-* visible-lg-* hidden-sm hidden-xs">	<br><div class="date"><p><?php echo get_the_date("d"); ?>
													<span><?php echo get_the_date("F"); ?></span>
													<h4><?php echo get_the_date("Y"); ?></h4>
													
													
													<?php edit_post_link('Edit Post', '<button type="button" class="btn btn-info">', '</button>'); ?> </div>
													</div>
				<div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
						<h3>
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						</a>
						</h3>
						
						<?php 	
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
						<aside>
							<?php the_post_thumbnail(); ?>
						</aside>
						<?php } ?>
					
						<?php the_content(); ?> <!-- Contents of a post -->
						
						</div>
							
</div>
<footer><br>
	  <b>Published by:</b> <?php  the_author(); ?><div class="hidden-md hidden-lg"> Published on <?php echo get_the_date(""); ?></div> | <?php the_category(', ') ?> | <?php comments_popup_link(); ?>.
</footer>


<?php endwhile; ?>


<?php
  if ( function_exists('wp_bootstrap_pagination') )
    wp_bootstrap_pagination();
?>

<?php get_footer(); ?>
