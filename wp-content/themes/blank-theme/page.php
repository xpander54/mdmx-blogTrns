<?php get_header(); ?>

<section class="contenido clear-fix">
	
	<article class="post dapost">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Páginas: ', 'next_or_number' => 'number')); ?>

				</div>

				<?php edit_post_link('Editar post.', '<p>', '</p>'); ?>

			</div>
			
			<?php // comments_template(); ?>

			<?php endwhile; endif; ?>

	</article>

	
</section>

