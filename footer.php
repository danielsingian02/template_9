<?php
wp_footer();
?>

<footer>
    <img src="<?php echo get_theme_mod('footer_image_logo', get_bloginfo('template_directory') . '/assets/images/logo.png') ?>" height="74px" border="0" alt="">
    <div class="menu-container-footer">
        <?php wp_nav_menu('primary'); ?>
    </div>
    <p>
        <?php
        printf(
            '%s. %s &copy; %s',
            get_theme_mod('copyright_text', __('© Copyright 2021 HOA Management', 'copyright_text')),
            get_bloginfo('name'),
            date_i18n('Y')
        );
        ?>
    </p>
</footer>

</body>



</html>