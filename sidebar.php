<?php
/**
 * Sidebar Template
 * Displays the sidebar widget area.
 */

if ( ! is_active_sidebar( 'obirc-sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'obirc-sidebar-1' ); ?>
</aside>