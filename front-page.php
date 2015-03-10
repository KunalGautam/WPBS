<?php get_header(); ?>

<?php while ( have_posts() ) : the_post() ?>
	<div class="row">
	

				<h3>
				<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
				</a>
				</h3> <!-- Title of the post -->
	
				<?php echo get_the_date( ); ?> <!-- Date published -->
				<?php the_time(); ?>  <!-- Time published -->
				<?php  the_author(); ?> <!-- Author of the post -->

			

			<?php 	
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<aside>
					<?php the_post_thumbnail(); ?>
				</aside>
			<?php } ?>
					
			<?php the_content(); ?> <!-- Contents of a post -->
					
			<footer>	

				<?php the_category(', ') ?>  <!-- Post category -->
				<?php the_tags(', ') ?>  <!-- Post tags -->
	
				 <?php comments_popup_link(); ?>.
				<?php edit_post_link(); ?>


			</footer>

		
				
	
</div>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
