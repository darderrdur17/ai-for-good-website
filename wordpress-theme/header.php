<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <style>
        /* Apply Inter font globally */
        body, button, input, select, textarea {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- =====================================================
     SITE NAVIGATION
     ===================================================== -->
<nav class="site-nav" id="site-nav" role="navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'ai-for-good' ); ?>">
    <div class="container">
        <div class="nav-inner">

            <!-- Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo" aria-label="<?php esc_attr_e( 'AI Singapore — Home', 'ai-for-good' ); ?>">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="nav-logo-icon" aria-hidden="true">AI</span>
                    <span class="nav-logo-text">AI Singapore</span>
                <?php endif; ?>
            </a>

            <!-- Desktop links -->
            <div class="nav-links" id="nav-links-desktop">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php
                    wp_nav_menu( [
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'walker'         => new AFG_Walker_Nav(),
                    ] );
                    ?>
                <?php else : ?>
                    <a href="#about">About</a>
                    <a href="#pillars">Pillars</a>
                    <a href="#impact">Impact</a>
                    <a href="#programs">Programs</a>
                    <a href="#partners">Partners</a>
                    <a href="#contact">Contact</a>
                <?php endif; ?>
                <a href="#contact" class="nav-cta"><?php esc_html_e( 'Partner With Us', 'ai-for-good' ); ?></a>
            </div>

            <!-- Mobile toggle -->
            <button
                class="nav-toggle"
                id="nav-toggle"
                aria-controls="nav-mobile"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'ai-for-good' ); ?>"
            >
                <span class="nav-toggle-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <!-- Mobile drawer -->
    <div class="nav-mobile" id="nav-mobile" aria-hidden="true">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'walker'         => new AFG_Walker_Nav(),
            ] );
            ?>
        <?php else : ?>
            <a href="#about">About</a>
            <a href="#pillars">Pillars</a>
            <a href="#impact">Impact</a>
            <a href="#programs">Programs</a>
            <a href="#partners">Partners</a>
            <a href="#contact">Contact</a>
        <?php endif; ?>
        <a href="#contact" class="nav-cta"><?php esc_html_e( 'Partner With Us', 'ai-for-good' ); ?></a>
    </div>
</nav>
<!-- / SITE NAVIGATION -->
