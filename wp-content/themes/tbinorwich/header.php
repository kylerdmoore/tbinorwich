<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) : ?>
		<?php wp_enqueue_script( 'comment-reply' ); ?>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
    <div id="headerimg">
        <h1>
            <a href="<?php echo get_option('home'); ?>">
				<?php bloginfo('name'); ?></a>
        </h1>
        <div class="description">
			<?php bloginfo('description'); ?>
        </div>
    </div>
</div>

<?php wp_nav_menu(); ?>

<?php get_search_form(); ?>