<?php
/**
 * Social Follow Vertical Module.
 *
 * @package wmfoundation
 */

$follow_text = get_theme_mod( 'wmf_social_follow_text', __( 'Follow', 'wmfoundation' ) );
$facebook    = get_theme_mod( 'wmf_facebook_url' );
$twitter     = get_theme_mod( 'wmf_twitter_url' );
$twitter_id  = get_theme_mod( 'wmf_twitter_id', 'Wikimedia' );
$twitter_id  = sprintf( '@%s', trim( $twitter_id, '@' ) );
$instagram   = get_theme_mod( 'wmf_instagram_url' );
$blog        = get_theme_mod( 'wmf_blog_url' );

if ( empty( $facebook ) && empty( $twitter ) && empty( $instagram ) && empty( $blog ) ) {
	return;
}
?>

<div class="module-mu w-18p">
	<?php if ( ! empty( $follow_text ) ) : ?>
	<h3 class="h3"><?php echo esc_html( $follow_text ); ?></h3>
	<?php endif; ?>
	<div class="wysiwyg">
		<p></p>
	</div>
	<ul class="link-list social-list color-blue ">

		<?php if ( ! empty( $facebook ) ) : ?>
		<li>
			<a href="<?php echo esc_url( $facebook ); ?>">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<?php esc_html_e( 'Facebook', 'wmfoundation' ); ?>
			</a>
		</li>
		<?php endif; ?>
		<?php if ( ! empty( $twitter ) ) : ?>
		<li>
			<a href="<?php echo esc_url( $twitter ); ?>">
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<?php echo esc_html( $twitter_id ); ?>
			</a>
		</li>
		<?php endif; ?>
		<?php if ( ! empty( $instagram ) ) : ?>
		<li>
			<a href="<?php echo esc_url( $instagram ); ?>">
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<?php esc_html_e( 'Instagram', 'wmfoundation' ); ?>
			</a>
		</li>
		<?php endif; ?>
		<?php if ( ! empty( $blog ) ) : ?>
		<li>
			<a href="<?php echo esc_url( $blog ); ?>">
				<span class="wmf-logo-icon"><svg width="64" height="64" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<title><?php esc_html_e( 'Logo Mark', 'wmfoundation' ); ?></title>
	<g id="Canvas" transform="translate(2304 17669)">
	<g id="Logo Mark">
	<g id="Logo Mark">
	<use xlink:href="#path0_fill" transform="translate(-2304 -17669)"></use>
	</g>
	</g>
	</g>
	<defs>
	<path id="path0_fill" d="M 34.7991 51.5545C 44.3688 50.1968 51.7069 42.013 51.7069 32.132C 51.7069 26.0978 48.9835 20.7425 44.7092 17.122L 34.7991 27.0029L 34.7991 51.5545ZM 29.2388 51.5545L 29.2388 27.0029L 19.3286 17.0843C 15.0544 20.6671 12.331 26.0601 12.331 32.0943C 12.331 42.013 19.669 50.1968 29.2388 51.5545ZM 49.1348 15.0477C 53.7116 19.6111 56.208 25.683 56.208 32.0943C 56.208 38.5056 53.6738 44.6152 49.1348 49.1408C 44.5579 53.7042 38.4681 56.1933 32.0378 56.1933C 25.6076 56.1933 19.4799 53.6665 14.9409 49.1408C 10.4019 44.6152 7.82979 38.5433 7.82979 32.0943C 7.82979 25.6453 10.3641 19.5734 14.9031 15.0477C 15.2813 14.6706 15.6974 14.2935 16.1135 13.9163L 10.591 8.41014C 10.1749 8.78727 9.79669 9.16441 9.38061 9.54154C 6.43026 12.4832 4.12293 15.8774 2.53428 19.6865C 0.869976 23.6087 0 27.7949 0 32.0943C 0 36.3936 0.832151 40.5798 2.53428 44.5021C 4.16076 48.3111 6.46808 51.7054 9.38061 54.647C 12.331 57.5887 15.7352 59.8892 19.5556 61.4732C 23.4894 63.1326 27.6879 64 32 64C 36.3121 64 40.5106 63.1703 44.4444 61.4732C 48.2648 59.8515 51.669 57.551 54.6194 54.647C 57.5697 51.7054 59.8771 48.3111 61.4657 44.5021C 63.13 40.5798 64 36.3936 64 32.0943C 64 27.7949 63.1679 23.6087 61.4657 19.6865C 59.8392 15.8774 57.5319 12.4832 54.6194 9.54154C 54.2411 9.16441 53.8251 8.78727 53.409 8.41014L 47.9244 13.9163C 48.3404 14.2557 48.7187 14.6329 49.1348 15.0477ZM 32 0C 37.5225 0 41.9858 4.45021 41.9858 9.95639C 41.9858 15.4626 37.5225 19.9128 32 19.9128C 26.4775 19.9128 22.0142 15.4626 22.0142 9.95639C 22.0142 4.45021 26.4775 0 32 0Z"></path>
	</defs>
</svg></span>
				<?php esc_html_e( 'Wikimedia Blog', 'wmfoundation' ); ?>
			</a>
		</li>
		<?php endif; ?>
	</ul>

</div>
