<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	

	</head>
	<body <?php body_class(); ?>>
		<header class="front-page clearfix container-block">
			<div class="header-div content-block">
				<div class="header-h">
					<h1 class="big-logo"><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					<h5><?php bloginfo('description'); ?></h5>
				</div>

				<nav class="site-nav">
					<div class="nav-container">
					<div class="nav-content">
					<div id="widget-menu-block">
						<?php  

							$args = array(

								'theme_location' => 'primary'

							);

						?>
						<?php wp_nav_menu($args); ?>
						</div>
					</div>
					</div>
				</nav>
			</div>
		</header>
		<div id="page-body" class="container-block clearfix front-page">
			<div class="page-title content-block">
					<div class="page-title content-block">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>