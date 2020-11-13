<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foodlovers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="site-body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-2">
					<div class="site-branding">
						<a href= "<?php echo site_url(); ?>">
							<img src="<?php echo get_template_directory_uri();?>/apps/img/logo.png" alt="">	
						</a>
					</div>
				</div>
				<div class="col-sm-10">
					<?php navigation(); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
