<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 1,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( '© Copyright 2021 HOA Management', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);


$wp_customize->add_setting( 'footer_image_logo',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/logo.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_logo', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'banner_text_options', 
    array(
        'title'         => __( 'Banner Text Options', 'banner_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'banner_heading',
    array(
        'default'           => __( 'ABC', 'banner_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);
$wp_customize->add_setting( 'banner_subheading',
    array(
        'default'           => __( 'Homeowners association', 'banner_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Sub-heading',
        'description' => 'Text put here will be shown in banner sections subheading',
    ) 
);

$wp_customize->add_setting( 'banner_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Template 9 1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image', 
    array(
        'priority'    => 40,
        'section'     => 'banner_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the banner image',
    ) 
));


//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'card_section', 
    array(
        'title'         => __( 'Card Section Text Options', 'card_section' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);

$wp_customize->add_setting( 'card_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Screenshot_1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'card_image', 
    array(
        'priority'    => 40,
        'section'     => 'card_section',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

// Setting for Copyright text.
$wp_customize->add_setting( 'card_heading',
    array(
        'default'           => __( 'FAMILY', 'card_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'card_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'card_section',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in card sections heading',
    ) 
);

$wp_customize->add_setting( 'card_description',
    array(
        'default'           => __( 'Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'card_description' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'card_description', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'card_section',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in card sections description',
    ) 
);

// --------------------

$wp_customize->add_setting( 'card_heading2',
    array(
        'default'           => __( 'HOME', 'card_heading2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'card_heading2', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'card_section',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in card sections heading',
    ) 
);

$wp_customize->add_setting( 'card_description2',
    array(
        'default'           => __( 'Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'card_description2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'card_description2', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'card_section',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in card sections description',
    ) 
);

// --------------------
$wp_customize->add_setting( 'card_heading3',
    array(
        'default'           => __( 'FRIENDS', 'card_heading3' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'card_heading3', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'card_section',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in card sections heading',
    ) 
);

$wp_customize->add_setting( 'card_description3',
    array(
        'default'           => __( 'Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'card_description3' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'card_description3', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'card_section',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in card sections description',
    ) 
);

// --------------------




//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'diamond_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Screenshot_2.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'diamond_image', 
    array(
        'priority'    => 40,
        'section'     => 'second_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'first_heading',
    array(
        'default'           => __( 'CALL IT YOUR HOME', 'first_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'first_subheading',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'first_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_text_options',
        'label'       => 'Sub-heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'second_subheading',
    array(
        'default'           => __( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pellentesque ac libero eu finibus. Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'second_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_text_options',
        'label'       => 'Sub-heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'map',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/template 9-2 1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'map', 
    array(
        'priority'    => 40,
        'section'     => 'second_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

// -----------

//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'third_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'diamond_image2',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Screenshot_2.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'diamond_image2', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'second_heading',
    array(
        'default'           => __( 'YOUR HOME IS HERE', 'second_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);


$wp_customize->add_setting( 'second_subheading2',
    array(
        'default'           => __( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum pellentesque ac libero eu finibus. Aenean suscipit nisi at dui imperdiet suscipit ac efficitur tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam velit lectus, dictum et sodales non, viverra eget libero.', 'second_subheading2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_subheading2', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Sub-heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'image1',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 4 (2).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image1', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'image2',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 3 (1).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image2', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'image3',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 2 (1).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image3', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));


}
?>