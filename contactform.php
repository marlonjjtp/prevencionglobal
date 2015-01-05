<?php 
/*
Template Name: Contact Form
*/
	if (isset($_POST['submit'])){
   	  	do_action( 'contact_send_message' );
	} else {

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
							<p>check</p>
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

	}
?>