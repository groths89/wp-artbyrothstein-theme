<article id="post-<?php the_ID(); ?>" <?php post_class('ct-single entry single'); ?>>
	<header>
		<h1 class="ct-single__post-title"><?php the_title() ?></h1>
		<?php get_template_part( 'template-parts/meta', 'single' ); ?>
		<?php if( has_post_thumbnail() ) : ?>
		<div class="ct-single__post-featured-image">
			<?php get_template_part( 'template-parts/featured', 'image' ); ?>
		</div>
	<?php endif; ?>
	</header>

	<div class="ct-single__entry-content">

		<!-- Content -->
		<?php the_content() ?>

		<!-- Link Pages -->
		<?php get_template_part( 'template-parts/pagination', 'links'); ?>

		<!-- Post Navigation -->
		<?php if( get_theme_mod( 'post_navigation', false ) === false ) the_post_navigation(); ?>

	</div>

	<!-- After Post Content -->
	<?php do_action( 'arte_after_post_content' ); ?>

	<!-- Author -->
	<?php get_template_part( 'template-parts/author' ); ?>

	<!-- Comments -->
	<?php get_template_part( 'template-parts/comments' ); ?>

</article>
