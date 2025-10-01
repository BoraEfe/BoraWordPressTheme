</main> <!-- sluit main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widgets">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>
    </div>

    <div class="site-info">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Alle rechten voorbehouden.</p>
        <?php
        // Optioneel: footer menu
        wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu_id'        => 'footer-menu',
        ) );
        ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
