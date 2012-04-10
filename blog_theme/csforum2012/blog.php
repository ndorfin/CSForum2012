<?php
	/*
	Template Name: Blog
	*/
	get_header();
?>
		<article>
			<header>
				<?php if ( has_post_thumbnail() ) { ?>
				<figure>
					<?php the_post_thumbnail('related-post-thumbnail', array('title' => "", 'alt' => "", 'class' => "")); ?>
				</figure>
				<?php } ?>
				<h1><?php the_title(); ?></h1>
			</header>
			<?php
			global $post;
			$args = array( 'numberposts' => 5 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
			<section>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</section>
			<?php endforeach; ?>
			<section>
				<h2>Archives</h2>
				<?php wp_get_archives(); ?>
			</section>
		</article>