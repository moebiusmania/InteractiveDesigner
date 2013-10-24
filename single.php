<?php get_header(); ?>

			<!-- Blocco presentazione -->
			<section id="presentazione" class="row articolo">
				<div class="span8">
					<!-- The Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article class="box">
						<h2><?php the_title(); ?></h2>
						
						<div class="immagine" style="background-image:url(
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						echo($large_image_url[0]); ?>
						);"></div>

						<p class="meta"><blockquote>
							Data astrale <strong><?php the_time("d F Y"); ?></strong> in <?php the_category(', '); ?>.
						</blockquote></p>
						
						<?php 

						the_content();
						
						the_tags(
							'<p><div class="well">Ho parlato di: ',
							', ',
							'</div></p>'	
						); 

						comments_template();

						?>


					</article>

					<?php endwhile; else: ?>

					<article class="box">
						<h2>Nessun risultato trovato!</h2>
						<p>Il contenuto non esiste o è stato rimosso, prova a utilizzare la form di ricerca qui sotto</p>
					</article>

					<?php endif; ?>
					<!-- /The Loop -->
				</div>

				<?php get_sidebar(); ?>

			</section>

		</section>

		<!-- Piede di pagina -->
		<?php get_footer(); ?>