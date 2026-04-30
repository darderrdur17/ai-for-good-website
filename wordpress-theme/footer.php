<!-- =====================================================
     SITE FOOTER
     ===================================================== -->
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">

            <!-- Brand -->
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo" aria-label="<?php esc_attr_e( 'AI Singapore — Home', 'ai-for-good' ); ?>">
                    <span class="footer-logo-icon" aria-hidden="true">AI</span>
                    <span class="footer-logo-text">AI Singapore</span>
                </a>
                <p>
                    <?php esc_html_e( "Singapore's national AI programme, dedicated to building deep national capabilities in AI, creating social and economic impacts, and putting Singapore on the world map.", 'ai-for-good' ); ?>
                </p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4><?php esc_html_e( 'Quick Links', 'ai-for-good' ); ?></h4>
                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <?php
                    wp_nav_menu( [
                        'theme_location' => 'footer',
                        'container'      => 'ul',
                        'container_class' => '',
                    ] );
                    ?>
                <?php else : ?>
                    <ul>
                        <li><a href="#about"><?php esc_html_e( 'About', 'ai-for-good' ); ?></a></li>
                        <li><a href="#pillars"><?php esc_html_e( 'Pillars', 'ai-for-good' ); ?></a></li>
                        <li><a href="#programs"><?php esc_html_e( 'Programs', 'ai-for-good' ); ?></a></li>
                        <li><a href="#partners"><?php esc_html_e( 'Partners', 'ai-for-good' ); ?></a></li>
                        <li><a href="#contact"><?php esc_html_e( 'Contact', 'ai-for-good' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Resources -->
            <div class="footer-col">
                <h4><?php esc_html_e( 'Resources', 'ai-for-good' ); ?></h4>
                <ul>
                    <li>
                        <a href="https://www.aisingapore.org" target="_blank" rel="noopener noreferrer">
                            <?php esc_html_e( 'AI Singapore', 'ai-for-good' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.smartnation.gov.sg/initiatives/national-ai-strategy/" target="_blank" rel="noopener noreferrer">
                            <?php esc_html_e( 'National AI Strategy', 'ai-for-good' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="https://learn.aisingapore.org/ai-for-good-educator/" target="_blank" rel="noopener noreferrer">
                            <?php esc_html_e( 'AI for Good (Educator)', 'ai-for-good' ); ?>
                        </a>
                    </li>
                    <li>
                        <a href="#contact"><?php esc_html_e( 'Contact Us', 'ai-for-good' ); ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'ai-for-good' ); ?></p>
            <p><?php esc_html_e( 'AI for the Public Good — for Singapore and the World', 'ai-for-good' ); ?></p>
        </div>
    </div>
</footer>
<!-- / SITE FOOTER -->

<?php wp_footer(); ?>
</body>
</html>
