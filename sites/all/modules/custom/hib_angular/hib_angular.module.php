<?php
function hib_rets_search_menu() {
    $items = array();
    $items['search'] = array(
        'title' => t('Homesinboise Rets Search'),
        'page callback' => 'hib_rets_search',
        'access arguments' => array('access content'),
    );

    return $items;
}

function hib_rets_search() {
    angularjs_init_application('hib_angular');
    drupal_add_js(drupal_get_path('module', 'hib_angular') . 'js/directives/retsSearch.directive.js');
    drupal_add_js(drupal_get_path('module', 'hib_angular') . 'js/app.js');
}