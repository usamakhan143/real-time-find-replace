<?php



add_filter( 'gettext', 'real_time_find_replace', 20, 3 );

function real_time_find_replace() {
    $get_options_page_fields = carbon_get_the_post_meta( 'crb_repeater_fields' );

    foreach ( $get_options_page_fields as $find_replace ) {
        
        custom_text_replace($find_replace['find_text'], $find_replace['replace_text'], $domain);

    }
}


function custom_text_replace( $translated_text, $untranslated_text, $domain ) {
    switch ( $untranslated_text ) {
        case 'Quantity':
            $translated_text = __( 'Cantidad', $domain );
            break;
        
        default:
            $translated_text = $untranslated_text;
            break;
    }
    return $translated_text;
}
