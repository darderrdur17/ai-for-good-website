<?php
/**
 * Main template file — used for blog/archive pages.
 * The homepage uses page-ai-for-good.php (Template Name: AI for Good).
 */
get_header();
?>

<main id="main-content" role="main" style="padding-top:4rem;">
    <div class="container section">

        <?php if ( have_posts() ) : ?>

            <div class="section-header">
                <?php
                if ( is_home() && ! is_front_page() ) {
                    echo '<h1 class="section-title">' . esc_html( single_post_title( '', false ) ) . '</h1>';
                } elseif ( is_archive() ) {
                    the_archive_title( '<h1 class="section-title">', '</h1>' );
                    the_archive_description( '<p class="section-subtitle mt-sm">', '</p>' );
                } elseif ( is_search() ) {
                    printf(
                        '<h1 class="section-title">%s &ldquo;%s&rdquo;</h1>',
                        esc_html__( 'Search Results for', 'ai-for-good' ),
                        get_search_query()
                    );
                } else {
                    echo '<h1 class="section-title">' . esc_html__( 'Latest Posts', 'ai-for-good' ) . '</h1>';
                }
                ?>
            </div>

            <div class="grid-3">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                <?php the_post_thumbnail( 'medium_large', [ 'style' => 'width:100%;height:200px;object-fit:cover;border-radius:.5rem;margin-bottom:1rem;' ] ); ?>
                            </a>
                        <?php endif; ?>

                        <header>
                            <h2 class="card-title" style="font-size:1.125rem;">
                                <a href="<?php the_permalink(); ?>" style="color:var(--foreground);text-decoration:none;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p style="font-size:.8125rem;color:var(--muted-foreground);margin:.25rem 0 .75rem;">
                                <?php echo esc_html( get_the_date() ); ?>
                                &middot; <?php the_category( ', ' ); ?>
                            </p>
                        </header>

                        <div class="card-text"><?php the_excerpt(); ?></div>

                        <a href="<?php the_permalink(); ?>" class="btn btn--outline btn--sm" style="margin-top:1rem;">
                            <?php esc_html_e( 'Read More', 'ai-for-good' ); ?>
                        </a>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <!-- Pagination -->
            <div style="margin-top:3rem;text-align:center;">
                <?php
                the_posts_pagination( [
                    'prev_text' => '&larr; ' . esc_html__( 'Newer', 'ai-for-good' ),
                    'next_text' => esc_html__( 'Older', 'ai-for-good' ) . ' &rarr;',
                ] );
                ?>
            </div>

        <?php else : ?>

            <div style="max-width:480px;margin:0 auto;text-align:center;padding:4rem 0;">
                <div style="font-size:3rem;margin-bottom:1rem;">🔍</div>
                <h1 class="section-title" style="font-size:1.5rem;">
                    <?php esc_html_e( 'Nothing found', 'ai-for-good' ); ?>
                </h1>
                <p class="section-subtitle" style="margin:1rem auto 2rem;">
                    <?php esc_html_e( 'Try a different search, or explore our programs.', 'ai-for-good' ); ?>
                </p>
                <?php get_search_form(); ?>
            </div>

        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
