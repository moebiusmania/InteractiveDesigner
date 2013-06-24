<?php get_header(); ?>

			<!-- Blocco presentazione -->
			<section id="presentazione" class="row pagina">
				<div class="span8">
					<!-- The Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article class="box">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
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