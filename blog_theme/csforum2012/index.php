<?php get_header(); ?>
		<!-- index.php -->
		<article>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<header>
				<?php if ( has_post_thumbnail() ) { ?>
				<figure>
					<?php the_post_thumbnail('related-post-thumbnail', array('title' => "", 'alt' => "", 'class' => "")); ?>
				</figure>
				<?php } ?>
				<h1><?php the_title(); ?></h1>
			</header>
			<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		</article>