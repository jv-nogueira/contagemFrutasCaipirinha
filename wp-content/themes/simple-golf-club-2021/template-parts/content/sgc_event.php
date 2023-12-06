<?php
/**
 * Template part for displaying sgc_event posts
 * @since simple-golf-club-2021 1.0
 */
$sgc_postType = 'sgc_event';        // Define SGC post type
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
            <?php
                the_content();
            ?>
            
            <?php // Get event info for this event
                include_once( get_stylesheet_directory() . '/template-parts/partials/sgc_single_event_info.php' );
            ?>
            
            <?php // Get tee info for this event
                include_once( get_stylesheet_directory() . '/template-parts/partials/sgc_card_tee_info.php' );
            ?>
            
            <?php // Get player info for this event
                include_once( get_stylesheet_directory() . '/template-parts/partials/sgc_event_player_info.php' );
            ?>
            
            <?php // Get group info for this event
                include_once( get_stylesheet_directory() . '/template-parts/partials/sgc_event_group_info.php' );
            ?>

            <?php
                wp_link_pages(
                    array(
                            'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page',  'simple-golf-club-2021' ) . '">',
                            'after'    => '</nav>',
                            /* translators: %: Page number. */
                            'pagelink' => esc_html__( 'Page %',  'simple-golf-club-2021' ),
                    )
            );
            ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php sgcc_twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
