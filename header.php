<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container-header">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="site-logo" title="<?php bloginfo('name'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-cd-n.png" 
                 alt="<?php bloginfo('name'); ?>">
        </a>

        <!-- Botão do menu mobile -->
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            ☰ Menu
        </button>

        <!-- Menu principal -->
        <nav id="site-navigation" class="main-navigation">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'menu',
                    'container' => false
                )); 
            ?>
        </nav>
    </div>
</header>

<?php wp_footer(); ?>

<!-- Script simples para toggle do menu mobile -->
<script>
const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.main-navigation');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('active');
    const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', !expanded);
});
</script>
