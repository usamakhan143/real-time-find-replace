<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action('after_setup_theme', 'load_carbon_fields_rtfr');
add_action('carbon_fields_register_fields', 'create_options_page_rtfr');

function load_carbon_fields_rtfr(){
    \Carbon_Fields\Carbon_Fields::boot();
}


function create_options_page_rtfr(){
    Container::make( 'theme_options', __( 'Real-Time Find and Replace' ) )
    ->set_icon( 'dashicons-image-rotate-right' )
    ->add_fields( array(
        Field::make( 'complex', 'crb_repeater_fields', 'Click "Add Entry" to begin. Then enter your find and replace cases below. Click and drag to change the order.' )
            // ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'find_text', 'Find' ),
                Field::make( 'text', 'replace_text', 'Replace' ),
            ) ),
    ));
}