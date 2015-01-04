<?php 
/*
Template Name: DefaultPage
*/
	get_header();
	
	if (have_posts()) :
		while (have_posts()) : the_post();

		?>
		<div id="pageblock-container container-block">
			<div id="pageblock-content">
		<section id="page-content" class="container-block clearfix">
			<article class="container-block">
				
				<div class="page-content container-block">
					<div class="page-content content-block">
						<?php the_content(); 
						endwhile;

							else : 
								echo 'no hay contenido';
						endif;
						?>
					</div>
				</div>
			</article>
		
		</section>
		<?php		

	get_sidebar();
	?>
			</div>
		</div>
	<?php
	get_footer();

?>