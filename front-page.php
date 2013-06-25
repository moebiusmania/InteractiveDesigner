<?php get_header(); ?>

			<!-- Blocco presentazione -->
			<section id="presentazione" class="row">
				<div class="span12">

					<!-- The Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article class="box">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<div class="foto span2" style="background-image: url(<?php bloginfo('template_url'); ?>/img/io.jpg)"></div>
					</article>

					<?php endwhile; else: ?>

					<article class="box">
						<h2>Nessun risultato trovato!</h2>
						<p>Il contenuto non esiste o è stato rimosso, prova a utilizzare la form di ricerca qui sotto</p>
					</article>

					<?php endif; ?>
					<!-- /The Loop -->
				</div>
			</section>

			<!-- Skill cards -->
			<section id="skills" class="row">

				<?php dynamic_sidebar('Box animati'); ?>

			</section>

			<!-- Form di ricerca -->
			<section id="cerca" class="row">
				<div class="span12">
					<form role="search" action="<?php echo home_url( '/' ); ?>" method="get" id="cerca" class="box form-inline">
						<label for="s">Se stavi cercando qualcosa di preciso</label>
						<input type="text" name="s" placeholder="prova a digitarlo qui" >
						<button class="btn btn-primary">
							<i class="icon-white icon-search"></i>
							Cerca
						</button>
					</form>
				</div>
			</section>
		</section>

		<!-- Piede di pagina -->
		<?php get_footer(); ?>