<?php


get_header();

?>
<div class="container">
	<div class="page-container">
		<div class="error-holder">
			<div class="box">
				<p class="error-type">
					<span class="flashing-num-1">4</span>
					<span class="flashing-num-1 del-1">0</span>
					<span class="flashing-num-1 del-2">4</span>
				</p>
			</div>
			<p class="error-text"><?php _e('Error!', 'kalium'); ?></p>
			<p><?php printf( __( 'Oops! parece que la direccion que ingresaste esta mal <br /> Quizas quieras volver al <a href="%s">HOME</a>?', 'kalium' ), home_url() ); ?></p>
		</div>
	</div>

</div>
<?php

get_footer();