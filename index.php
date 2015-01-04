<?php get_header(); ?>
	
		<div id="pageblock-container container-block">
			<div id="pageblock-content">
		<section id="page-content" class="container-block clearfix">
			<?php 
				if (have_posts()) : while (have_posts()) : the_post();
			 ?>
			<article class="container-block">
				<div class="page-content container-block">
					<div id="post-block" class="page-content content-block">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="sub-text"> publicado el: <?php the_date( get_option( 'l, F j, Y' ) ); ?></p> 
						<?php the_content(); ?>
					</div>
				</div>
			</article>
			<?php 
				endwhile;

				else : 
					echo 'no hay contenido';
				endif;
			 ?>
		</section>
	

<?php get_sidebar();?>
			</div>
		</div>
<?php get_footer();?>
	
