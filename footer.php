		<section id="fondo">
			<footer class="container">
				<section class="row">
					
					<?php dynamic_sidebar('Footer - colonna 1'); ?>

					<?php dynamic_sidebar('Footer - colonna 2'); ?>

					<?php dynamic_sidebar('Footer - colonna 3'); ?>

					<div class="span4">
						<h4>The social networks</h4>
						<ul class="unstyled">
							<li><a href=""><i class="icon-facebook-sign"></i> Facebook</a></li>
							<li><a href=""><i class="icon-twitter-sign"></i> Twitter</a></li>
							<li><a href=""><i class="icon-google-plus-sign"></i> Google+</a></li>
							<li><a href=""><i class="icon-flickr"></i> Flickr</a></li>
							<li><a href=""><i class="icon-instagram"></i> Instagram</a></li>
							<li><a href=""><i class="icon-linkedin-sign"></i> LinkedIn</a></li>
							<li><a href=""><i class="icon-foursquare"></i> Foursquare</a></li>
							<li><a href=""><i class="icon-github-alt"></i> Github</a></li>
							
						</ul>
					</div>
					<div class="span4">
						<h4>Contatto rapido</h4>
						<form action="<?php bloginfo('template_url') ?>" method="get">
							<label>Chi sei?</label>
							<input name="mittente" type="text" placeholder="Sig Mario Rossi" class="input-block-level" required>
							<label>Email di contatto</label>
							<input name="indirizzo" type="email" placeholder="prova@indirizzo.it" class="input-block-level" required>
							<label>Messaggio (breve)</label>
							<textarea name="testo" class="input-block-level" required></textarea>	
							<button class="btn btn-primary btn-block">
								<i class="icon-white icon-envelope-alt"></i>
								Invia messaggio!
							</button>
						</form>
					</div>
				</section>
			</footer>
		</section>

	</body>

	<!-- Importazioni WordPress -->
	<?php wp_footer(); ?>

</html>