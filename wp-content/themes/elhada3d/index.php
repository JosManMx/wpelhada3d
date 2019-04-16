<?php get_header()?>

<div class="container">
	<div class="col-md-5">
		<div class="row">
			<div class="col-xs-12">
				<?php get_template_part( 'events', 'loop' ) ?> 
			</div>
			<!-- <div class="col-xs-12">
				<form class="newsletter-form">
					<p class="newsletter-text">¡ey!... ¡entérate de los próximos eventos!</p>
					<p class="newsletter-title">Suscríbete a mi boletín</p>
					<input class="newsletter-input" type="text" required placeholder="micorreo@dominio.com">
					<button class="button newsletter-button">Suscribirme</button>
					<label class="newsletter-terms">
						<input type="checkbox">
						Acepto los 
						<a href="#">
							términos y condiciones
						</a>
					</label>
				</form>
			</div> -->
		</div>
	</div>
	<!-- <img src="https://fakeimg.pl/700?text=aqui-va%0ASusana" alt=""> -->
</div>


<?php
get_footer();