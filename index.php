<?php get_header(); ?>

			<!-- Blocco presentazione -->
			<section id="presentazione" class="row">
				<div class="span12">
					<article class="box">
						<h2>Web / UI / Front End Designer</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="foto span2" style="background-image: url(<?php bloginfo('template_url'); ?>/img/io.jpg)"></div>
					</article>
				</div>
			</section>

			<!-- Skill cards -->
			<section id="skills" class="row">
				<a href="">
					<section class="span4">
						<div class="box">
							<h3>Test</h3>
							<p>prova</p>
							<i class="icon-off"></i>
						</div>
					</section>
				</a>

				<a href="">
					<section class="span4">
						<div class="box">
							<h3>Test</h3>
							<p>prova</p>
							<i class="icon-off"></i>
						</div>
					</section>
				</a>

				<a href="">
					<section class="span4">
						<div class="box">
							<h3>Test</h3>
							<p>prova</p>
							<i class="icon-off"></i>
						</div>
					</section>
				</a>
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