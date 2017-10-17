<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div <?php post_class(); ?>>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</div>

		<?php wp_link_pages(); ?>
	<?php endwhile; ?>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>