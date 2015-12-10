<?php

//function homesinboise_views_exposed_form($variables) {
//    kpr($variables);
//}

function homesinboise_theme($existing, $type, $path)
{
    $themes['drealty_listing'] = array(
        'render element' => 'elements',
        'template' => 'templates/drealty-listing',
    );
    $themes['drealty_listing__drealty_listing__search'] = array(
        'render element' => 'elements',
        'template' => 'templates/drealty-listing--search',
    );
    return $themes;
}
