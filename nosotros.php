<?php 

	get_header();
	get_sidebar();
	if (have_posts()) :
		while (have_posts()) : the_post();

		?>
		<section class="content clearfix">
			<article class="post-page">

				<?php if (has_children() OR $post->post_parent >0) { ?>
					<nav class="children-links clearfix"> 
						<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
						<span class="parent-link">></span>
						<ul>
							<li ><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
						</ul>	
					</nav>
				<?php } ?>

				
				<h2>Nosotros</h2>
				
				<div class="nosotros" id="d-quienes-somos">
					<h2>Quienes Somos</h2>
					<p>
						Somos una empresa enfocada en la prevención de riesgos laborales con un staff de profesionales con mas de 10 años de experiencia, altamente calificados en temas de calidad y mejoras de procesos, seguridad y salud ocupacional, medio ambiente, responsabilidad social y otras disciplinas en diversas actividades económicas dentro y fuera del país; desde empresas en los sectores de minería, construcción, pesca e hidrocarburos; así como también en empresas de servicios bancos, supermercados, salud, catering; entre otros.
					</p>					
				</div>

				<div class="nosotros" id="d-mision">
					<h2>Misión</h2>
					<p>
						Somos una empresa enfocada en la prevención de riesgos laborales con un staff de profesionales con mas de 10 años de experiencia, altamente calificados en temas de calidad y mejoras de procesos, seguridad y salud ocupacional, medio ambiente, responsabilidad social y otras disciplinas en diversas actividades económicas dentro y fuera del país; desde empresas en los sectores de minería, construcción, pesca e hidrocarburos; así como también en empresas de servicios bancos, supermercados, salud, catering; entre otros.
					</p>					
				</div>

				<div class="nosotros" id="d-vision">
					<h2>Visión</h2>
					<p>
						Ser reconocida como los referentes en la gestión de riesgos a través de la experiencia, know how e innovación de las soluciones brindadas por medio de nuestros servicios.
					</p>					
				</div>

			</article>
		
		</section>
		<?php

	get_footer();

?>