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

		<div class="site-content clearfix front-page container-block">

		

			<section class="post-page front-page clearfix container2-block">

				<div class="content-block clearfix">

					<?php 

						if(have_posts()): 

							while (have_posts()): the_post();

								the_content();

							endwhile;

							else:

								echo "no post";

						endif; 

					?>

				</div>



			</section>
			<section id="gesion-section" class="front-page container2-block clearfix">
				<div class="content-block clearfix">
					<h2>Gestión Integral de Riesgos Laborales</h2>
					<p>Somos una empresa enfocada en la prevención de riesgos laborales con un staff de profesionales con más de 10 años de experiencia, altamente calificados en temas de calidad y mejora de procesos, seguridad y salud ocupacional, medio ambiente, responsabilidad social y otras disciplinas en diversas actividades económicas dentro y fuera del país; desde empresas en los sectores de minería, construcción, pesca e hidrocarburos; así como también en empresas de servicios como bancos, supermercados, salud, catering; entre otros.</p>

				</div>
			</section>

			</section>

			<section id="alianzas-section" class="alianzas front-page container2-block clearfix">

				<div class="content-block clearfix">

					<h2>Alianzas Estrategicas</h2>

					<div id="alianzas1">

						<?php dynamic_sidebar("w_alianzas-1"); ?>

					</div>

					<div id="alianzas2">

						<?php dynamic_sidebar("w_alianzas-2"); ?>

					</div>

				</div>

			</section>

		</div>

		<footer class="site-footer front-page container-block" >

				<div class="widget-area ">



					<div class="footer1 container2-block">

						<div class="content-block">

							<?php dynamic_sidebar('footer1'); ?>

						</div>

					</div>



						<div class="footer2 container2-block">

							<div class="content-block">

								<?php dynamic_sidebar('footer2'); ?>

							</div>

						</div>

				</div>

		</footer>

		<script>

					jQuery(function($) {

					$('#menu-altermenu').slicknav({

						Label:'headermenu',

						duration:400,

						prependTo:'.nav-content'

					});



					});

					</script>

	</body>

</html>