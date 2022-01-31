<?php

/**
 * Registers the technique post type.
 */

function register_example()
{
    register_example_post_type();
    register_example_fields();
}
function register_example_post_type()
{
    register_post_type(
        'example',
        [
            'labels' => [
                'name' => esc_html__('Voorbeelden', 'fdf'),
                'singular_name' => esc_html__('Voorbeeld', 'fdf'),
                'add_new' => esc_html__('Voeg toe', 'fdf'),
                'add_new_item' => esc_html__('Voeg een nieuwe voorbeeld toe', 'fdf'),
                'edit' => esc_html__('Bewerken', 'fdf'),
                'edit_item' => esc_html__('Bewerk voorbeeld', 'fdf'),
                'new_item' => esc_html__('Nieuw voorbeeld', 'fdf'),
                'view' => esc_html__('Toon voorbeeld', 'fdf'),
                'view_item' => esc_html__('Toon voorbeeld', 'fdf'),
                'search_items' => esc_html__("Zoek naar voorbeeld", 'fdf'),
                'not_found' => esc_html__("Geen voorbeeld gevonden", 'fdf'),
                'not_found_in_trash' => esc_html__("Geen voorbeeld gevonden in prullenbak", 'fdf'),
            ],
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'exclude_from_search' => true,
            'show_in_nav_menus' => false,
            'hierarchical' => false,
            'has_archive' => false,
            'menu_position' => 21,
            'menu_icon' => 'dashicons-testimonial',
            'can_export' => true,
            'rewrite' => ['slug' => 'example'],
            'show_in_rest' => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'custom-fields',
            ],
        ],
    );
}

function register_example_fields()
{
    acf_add_local_field_group([
        "key" => "group_61a8c77e88148",
        "title" => "Voorbeeld Data",
        "fields" => [
            [
                "key" => "field_61a9f8bb8jsnb",
                "label" => "Prijs:",
                "name" => "example_price",
                'type' => 'text',
                'placeholder' => '€699',
                "instructions" => "",
                "required" => 1,
                "conditional_logic" => 0,
            ],
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "example",
                ],
            ],
        ],
        "menu_order" => 0,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "top",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => true,
        "description" => "",
        "modified" => 1638545628,
    ]);
}

add_action('init', 'register_example');
