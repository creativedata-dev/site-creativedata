<aside>
    <?php if ( is_active_sidebar('main-sidebar') ) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else: ?>
        <p>Sidebar padrão.</p>
    <?php endif; ?>
</aside>
