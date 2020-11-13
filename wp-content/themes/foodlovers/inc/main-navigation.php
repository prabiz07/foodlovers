<?php
/**
 * 
 * =================================
 *     NAVIGATION FUNCTION
 * =================================
 *
 */

function navigation(){
    ?>
    <nav id="site-navigation" class="main-navigation">
        <?php 
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'         => false,
                'menu_class'        => 'menu',
            ));
        ?>
    </nav>
    <?php
}
add_action( 'main-nav', 'navigation' );