<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
 
		<div class="row">


 			<header>  

				<h3><?php the_title(); ?></h3> <!-- Title of the post -->
	
			</header>	

			<?php 	
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<aside>
					<?php the_post_thumbnail(); ?>
				</aside>
			<?php } ?>


			<?php the_content(); ?> <!-- Contents of a post -->

			<footer>	
				Published on : <?php echo get_the_date( ); ?> <?php the_time(); ?> by <b><?php  the_author(); ?><br /> <!-- Author of the post --></b>

				<?php the_category(', ') ?>  <!-- Post category -->
				<?php the_tags(', ') ?>  <!-- Post tags -->
	
				 <?php comments_popup_link(); ?>. <!-- comments_number -->
				<?php edit_post_link(); ?>
				
				<?php comments_template(); ?>


			</footer>

				
		</div>


	
	<?php endwhile; ?>


<?php endif; ?>
   
<?php get_footer(); ?>
 
