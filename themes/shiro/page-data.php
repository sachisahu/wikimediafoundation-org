<?php
/**
 * Template Name: Data Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package shiro
 */

get_header();
while ( have_posts() ) {
	the_post();

	// Page Header.
	$parent_page   = wp_get_post_parent_id( get_the_ID() );
	$template_args = array(
		'h4_link'  => ! empty( $parent_page ) ? get_the_permalink( $parent_page ) : '',
		'h4_title' => ! empty( $parent_page ) ? get_the_title( $parent_page ) : '',
		'h2_title' => get_the_title(),
		'h1_title' => get_post_meta( get_the_ID(), 'sub_title', true ),
	);

	if ( has_post_thumbnail() ) {
		$template_args['image'] = get_the_post_thumbnail_url( get_the_ID(), 'large' );
		wmf_get_template_part( 'template-parts/header/page-image', $template_args );
	} else {
		wmf_get_template_part( 'template-parts/header/page-noimage', $template_args );
		?>
       <div class="mw-980">
            <div class="page-intro wysiwyg">
                <?php get_template_part( 'template-parts/page/page', 'intro' ); ?>
            </div>
        </div>
	<?php }
	?>

	<?php 
	// should be in every data page
	get_template_part( 'template-parts/page/page', 'stats-featured' ); 
	get_template_part( 'template-parts/page/page', 'stats-graph' ); 
	?>
	
	<?php
	$modules = array(
		'social',
		'cta',
		'facts',
		'connect',
		'profiles',
		'listings',
		'featured-posts',
		'projects',
		'offsite-links',
		'support',
	);

	foreach ( $modules as $module ) {
		get_template_part( 'template-parts/page/page', $module );
	}
}
get_footer();
