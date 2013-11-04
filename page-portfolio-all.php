<?php get_header(); ?>

			<!-- Blocco presentazione -->
			<section id="presentazione" class="row pagina portfolio">
				<div class="span12">
					<!-- The Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article class="box">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					

					<?php endwhile; else: ?>

					<article class="box">
						<h2>Nessun risultato trovato!</h2>
						<p>Il contenuto non esiste o è stato rimosso, prova a utilizzare la form di ricerca qui sotto</p>

					<?php endif; ?>
					<!-- /The Loop -->
					

					<!-- Custom Loop Portfolio works -->
					<?php 
					$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					?>
					
						<article class="work">
							<h3><?php the_title(); ?></h3>
							<img src="xxx" alt="" width="100%" height="200">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis modi maxime beatae placeat assumenda nostrum minus autem rerum reiciendis! Aliquam, nemo placeat cupiditate corrupti maiores natus voluptatum quod voluptate!</p>
						</article>

					<?php endwhile; ?>
					<!-- Custom Loop Portfolio works -->
					
					</article>

				</div>

			</section>

		</section>

		<!-- Piede di pagina -->
		<?php get_footer(); ?>