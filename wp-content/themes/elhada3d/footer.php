</main> <!-- #main -->

<footer class="footer">
	<div class="container">		
		<div class="row">

		<?php get_template_part( 'footer', 'left' ) ?> 
		<?php get_template_part( 'footer', 'center' ) ?> 
		<?php get_template_part( 'footer', 'right' ) ?> 

		</div>
		<div class="row">
			<div class="footer-copyright  col-md-12 col-xs-12">
				<p>Desarrollado por 
        <a href="https://jostech.com.ve" target="_blank">
        JosTechS.com.ve</a>
        <span class="hide-mobile"> | </span> Hosting por 
          <a href="https://redbyte.com.mx" target="_blank">
          redbyte.com.mx</a>
					<span class="hide-mobile"> | </span>
					Todos los derechos reservados 2019</p>
			</div>
		</div>
	</div>
</footer>
<?php 
wp_footer(); 