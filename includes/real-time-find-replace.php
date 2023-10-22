<?php


function real_time_find_replace_rtfr( $buffer ) {

    $find_replace_fields = get_plugin_options_rtfr('crb_repeater_fields');

    if(is_array($find_replace_fields)) {
        foreach($find_replace_fields as $find_replace_field) {
            $buffer = str_replace( $find_replace_field['find_text'], $find_replace_field['replace_text'], $buffer );
        }
    }
    return $buffer;
}

function rtfr_template_redirect() {
	ob_start();
	ob_start( 'real_time_find_replace_rtfr' );
}


add_action( 'template_redirect', 'rtfr_template_redirect' );