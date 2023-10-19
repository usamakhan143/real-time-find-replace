<?php


// add_filter( 'gettext', 'showDatas', 10, 3 );

// function showDatas( $translated_text, $untranslated_text, $domain ) {
//     $trans = get_plugin_options_rtfr('crb_repeater_fields');
    
//     // Loop through the trans from the repeater
//     foreach ( $trans as $tran ) {
//         if ( $untranslated_text == $tran['find_text'] ) {
//             return $tran['replace_text'];
//         }
//     }
    
//     // If no match is found, return the original text
//     return $translated_text;
// }

// get_plugin_options_rtfr('manjan_plugin_email');

// add_action('init', 'showData');
// function showData()
// {
//     // echo get_s_field('test_field');
//     $slides = get_plugin_options_rtfr( 'crb_repeater_fields' );
//     echo '<ul>';
//     foreach ( $slides as $slide ) {
//         echo '<li>';
//         echo '<h2>' . $slide['find_text'] . $slide['replace_text'] . '</h2>';
//         echo '</li>';
//     }
//     echo '</ul>';
// }