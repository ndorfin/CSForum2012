<?php get_header(); ?>
		<article>
			<!-- page.php -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<header><?php the_title(); ?></header>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		</article>