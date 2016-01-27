<?php

//function homesinboise_views_exposed_form($variables) {
//    kpr($variables);
//}

function homesinboise_preprocess_views_view_fields(&$vars) {
//    $query = db_query(
//        'SELECT dl.rets_id, dl.id ' .
//        'FROM drealty_listing as dl ' .
//        'LEFT JOIN field_data_field_mls_list_price as fp ' .
//        'ON dl.id = fp.entity_id ' .
//        'LEFT JOIN field_data_field_la1_agentid as aid ' .
//        'ON dl.id = aid.entity_id ' .
//        'LEFT JOIN field_data_field_mls_list_price as lp ' .
//        'ON dl.id = fp.entity_id ' .
//        'WHERE lp.field_mls_list_price_value BETWEEN 200000 AND 209000 ' .
//        'LIMIT 1, 10'


//        'SELECT dl.id, DISTINCT dl.rets_id, fmi.field_mls_main_image_fid ' .
//        'FROM drealty_listing as dl ' .
//        'JOIN field_data_field_mls_list_price as fp ' .
//        'ON dl.id = fp.entity_id ' .
//        'JOIN field_data_field_mls_main_image as fmi ' .
//        'ON dl.id = fmi.entity_id ' .
//        'WHERE fp.field_mls_list_price_value BETWEEN 100000 AND 109000 ' .
//   //     'GROUP BY dl.rets_id ' .
//            //'AND'
//        'LIMIT 1,10 '

//    );

//    $query = db_select('drealty_listing', 'dl')
//      ->fields('dl', array('id', 'rets_id'))
//
//      ->leftJoin('field_data_field_mls_list_price', 'fp', 'dl.id = fp.entity_id')
////      ->condition('fp.field_mls_list_price_value', array('100000','101000'), 'BETWEEN');
//      ->range(1,10)
//      ->execute();
  //  var_dump($query);
 //   $vars['shitballs'] = $query->fetchAllKeyed();
 //   $vars['shitballs'] = 'xXxXXxXXxxxxxxxxxxxxxxx';
}

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

