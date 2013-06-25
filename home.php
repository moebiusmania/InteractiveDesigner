<?php get_header(); ?>

			<!-- Blocco presentazione -->
			<section id="presentazione" class="row blog">
				<div class="span8">
					
					<article class="box" >
					
					<!-- The Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					
						<?php if(is_sticky($id)){ ?>
							<div class="feat">
							<span class="feat">in primo piano</span>
						<?php } ?>

						<figure>
							<?php the_post_thumbnail('thumbnail'); ?>
							<a href="<?php the_permalink(); ?>">Leggi tutto &raquo;</a>
							<span class="overlay"></span>
							<span class="commenti badge badge-info"><?php comments_number('0', '1', '%') ?></span>
						</figure>

						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="meta">Data astrale <?php the_time("d F Y"); ?> in <?php the_category(','); ?>.</p>
						<?php the_excerpt(); ?>

						<?php if(is_sticky($id)){ ?>
							</div>
						<?php } ?>
					
					<hr>

					<?php endwhile; else: ?>

						<h2>Nessun risultato trovato!</h2>
						<p>Il contenuto non esiste o è stato rimosso, prova a utilizzare la form di ricerca qui sotto</p>
					
					<?php endif; ?>
					<!-- /The Loop -->
					
					<!-- Paginazione -->
					<div class="pagination pagination-large">
					<?php
					global $wp_query;
			
					$big = 999999999; // need an unlikely integer
			
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'type' => 'list',
					) );
					?>
					</div>

					</article>

				</div>

				<?php get_sidebar(); ?>

			</section>

		</section>

		<!-- Piede di pagina -->
		<?php get_footer(); ?>