<?php
/**
 * The Stats Featured Module.
 *
 * @package shiro
 */

$template_args = wmf_get_template_data();

if ( empty( $template_args ) || ! is_array( $template_args ) ) {
	return;
}

$bg_opts = get_post_meta( get_the_ID(), 'page_header_background', true );
$header_accent_color = isset( $bg_opts['color'] ) && 'pink' === $bg_opts['color'] ? 'pink' : '';

$main_image = ! empty( $template_args['main_image'] ) ? $template_args['main_image'] : '';
$main_image = is_numeric( $main_image ) ? wp_get_attachment_image_url( $main_image, 'large' ) : $main_image;
$no_of_modules = count($template_args['copy']);

$allowed_tags = [ 'span' => [ 'class' => [], 'style' => [] ], 'em' => [], 'strong' => [], 'a' => [ 'href' => [], 'class' => [], 'title' => [], 'rel' => [] ], 'p' => [], 'br' => [] ];
?>

<div class="data-ungrid mw-980 flex flex-medium flex-wrap flex-space-between">
	<div class="ungrid-line <?php echo esc_attr($header_accent_color); ?>"></div>
	<div class="primary-stat w-100p">
		<div class="ungrid-top-box data-bite mar-bottom wysiwyg w-32p">
			<?php wmf_get_template_part( 'template-parts/modules/data-vis/data-bite', $template_args['copy'][0] ); ?>
		</div>
	</div>
	<div class="ungrid-line-replicate <?php echo esc_attr($header_accent_color); ?>"></div>
	<div class="explanation mar-bottom_lg wysiwyg w-50p">
		<div class="main-image-container w-90p">
			<img src="<?php echo esc_url( $main_image ); ?>">
		</div>
		<p class="w-75p"><?php echo wp_kses( $template_args['explanation'], $allowed_tags ); ?></p>
	</div>
	<div class="secondary-stats w-32p">
		<?php for ($i = 1; $i < $no_of_modules; $i++) { ?>
		<div class="data-bite mar-bottom_lg wysiwyg">
			<?php wmf_get_template_part( 'template-parts/modules/data-vis/data-bite', $template_args['copy'][$i] ); ?>
		</div>
		<?php } ?>	
	</div>
	<div class="w-32p"></div>
</div>