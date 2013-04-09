<?php get_header(); ?>

<?php global $more; $more = 1; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="slide">	
	<div class="row-fluid">
		<div class="span6">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
		<div class="span6">
			<?php the_post_thumbnail('large'); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>