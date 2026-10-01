<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Fast_IPTV_Store
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <?php if ( have_posts() ) : ?>
        <div class="space-y-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-main-bg p-6 rounded-lg border border-gray-100 shadow-sm' ); ?>>
                    <header class="entry-header mb-3">
                        <?php the_title( '<h2 class="entry-title text-2xl font-bold text-main-text hover:text-brand transition-colors"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    </header>

                    <div class="entry-content text-main-text leading-relaxed">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="mt-8 flex justify-center">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <div class="bg-main-bg p-8 rounded-lg border border-gray-100 text-center">
            <h2 class="text-xl font-bold text-main-text"><?php esc_html_e( 'Nothing Found', 'fast-iptv-store' ); ?></h2>
            <p class="mt-2 text-gray-500"><?php esc_html_e( 'It looks like nothing was found at this location.', 'fast-iptv-store' ); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php
get_footer();
