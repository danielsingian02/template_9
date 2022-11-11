<?php
get_header();
?>

<div class="banner" style="background-image:url('<?php echo get_theme_mod('banner_image', get_bloginfo('template_directory') . '/assets/images/Template 9 1.png'); ?>')">
    <div class="banner-text">
        <h2>
            <?php printf(get_theme_mod('banner_heading', __('ABC', 'banner_heading'))); ?>
        </h2>
        <h3>
            <?php printf(get_theme_mod('banner_subheading', __('Homeowners association', 'banner_subheading'))); ?>
        </h3>
    </div>
</div>
<div class="card-container">
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_theme_mod('card_image', get_bloginfo('template_directory') . '/assets/images/Screenshot_1.png') ?>" border="0" alt="">
        </div>
        <h6><?php printf(get_theme_mod('card_heading', __('Family', 'card_heading'))); ?></h6>
        <p><?php printf(get_theme_mod('card_description', __('Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'card_description'))); ?></p>
    </div>
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_theme_mod('card_image', get_bloginfo('template_directory') . '/assets/images/Screenshot_1.png') ?>" border="0" alt="">
        </div>
        <h6><?php printf(get_theme_mod('card_heading2', __('Home', 'card_heading2'))); ?></h6>
        <p><?php printf(get_theme_mod('card_description2', __('Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'card_description2'))); ?></p>
    </div>
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_theme_mod('card_image', get_bloginfo('template_directory') . '/assets/images/Screenshot_1.png') ?>" border="0" alt="">
        </div>
        <h6><?php printf(get_theme_mod('card_heading3', __('Friends', 'card_heading3'))); ?></h6>
        <p><?php printf(get_theme_mod('card_description3', __('Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'card_description3'))); ?></p>

    </div>
</div>


<div class="text-heading-container">
    <div class="text-heading">
        <h3><?php printf(get_theme_mod('first_heading', __('CALL IT YOUR HOME', 'first_heading'))); ?></h3>
        <img id="small-diamond" src="<?php echo get_theme_mod('diamond_image', get_bloginfo('template_directory') . '/assets/images/3-Diamonds.png') ?>" border="0" alt="">
        <p><?php printf(get_theme_mod('first_subheading', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'first_subheading'))); ?></p>
        <p><?php printf(get_theme_mod('second_subheading', __('Class aptent taciti sociosqu ad                                           litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pellentesque ac libero eu finibus. Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'second_subheading'))); ?></p>
    </div>

    <div class="map">
        <img src="<?php echo get_theme_mod('map', get_bloginfo('template_directory') . '/assets/images/template 9-2 1.png') ?>" border="0" alt="">
    </div>

    <div class="text-heading-2">
        <h4><?php printf(get_theme_mod('second_heading', __('YOUR HOME IS HERE', 'second_heading'))); ?></h4>
        <img id="small-diamond" src="<?php echo get_theme_mod('diamond_image2', get_bloginfo('template_directory') . '/assets/images/3-Diamonds.png') ?>" border="0" alt="">
        <p><?php printf(get_theme_mod('second_subheading2', __('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pellentesque ac libero eufinibus. Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturientmontes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'second_subheading2'))); ?></p>
        <div class="gallery">
            <img src="<?php echo get_theme_mod('image1', get_bloginfo('template_directory') . '/assets/images/Asset 4 (2).png') ?>" border="0" alt="">
            <img src="<?php echo get_theme_mod('image2', get_bloginfo('template_directory') . '/assets/images/Asset 3 (1).png') ?>" border="0" alt="">
            <img src="<?php echo get_theme_mod('image3', get_bloginfo('template_directory') . '/assets/images/Asset 2 (1).png') ?>" border="0" alt="">

        </div>
    </div>
</div>

<?php
get_footer();
?>