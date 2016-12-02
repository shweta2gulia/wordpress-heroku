<div class="header-image loading <?php echo ( get_theme_mod( 'shopstar-slider-text-shadow', customizer_library_get_default( 'shopstar-slider-text-shadow' ) ) ) ? 'text-shadow' : ''; ?>">
	<img src="<?php esc_url( header_image() ); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php echo get_custom_header()->width ?>" />

	<?php
	if ( get_theme_mod( 'shopstar-header-image-text', customizer_library_get_default( 'shopstar-header-image-text' ) ) != "" ) {
	?>
	<div class="overlay">
		<?php echo wp_kses_post( get_theme_mod( 'shopstar-header-image-text', customizer_library_get_default( 'shopstar-header-image-text' ) ) ); ?>
	</div>
	<?php
	}
	?>

</div>
