<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$nids = db_select('node', 'n')
    ->fields('n', array('nid'))
    ->condition('n.type', 'homesinboise_team')
    ->execute()
    ->fetchCol(); // returns an indexed array
//var_dump($nids);
//$removePaigeNID = array_search('69', $nids);
//unset($nids[$removePaigeNID]);
shuffle($nids);

$userNode = node_load($nids[0]);

//kpr($fields);
//kpr($userNode->nid);

if(isset($userNode->field_mls_agent_id['und'][0]['value'])) { $agentMID = $userNode->field_mls_agent_id['und'][0]['value']; }
if(isset($userNode->nid)) { $agentNID = $userNode->nid; }
if(isset($userNode->field_name['und'][0]['value'])) { $agentName = $userNode->field_name['und'][0]['value']; }
if(isset($userNode->field_email['und'][0]['email'])) { $agentEmail = $userNode->field_email['und'][0]['email']; }
if(isset($userNode->field_phone['und'][0]['value'])) { $agentPhone = $userNode->field_phone['und'][0]['value']; }
if(isset($userNode->field_agent_image['und'][0]['uri'])) { $agentImage = image_style_url('agent_picture_on_listing_results', $userNode->field_agent_image['und'][0]['uri']); }
$path = path_to_theme('homesinboise') . '/images/';
?>
    <div class="mlsResultRow col-xs-12">
        <div class="mlsResultRowInner">
            <div class="mlsResultColumn1 mlsResult col-sm-4">
                <?php print $fields['field_mls_main_image']->wrapper_prefix; ?>
                <?php print $fields['field_mls_main_image']->content; ?>
                <?php print $fields['field_mls_main_image']->wrapper_suffix; ?>
                <div class="amountPictures"><?php print $fields['field_mls_main_image_1']->content; ?></div>
            </div>
            <div class="mlsResultColumn2 mlsResult col-sm-4">
                <div class="mlsResultListPrice">
                    <?php print $fields['field_mls_list_price']->wrapper_prefix; ?>
                    <?php print $fields['field_mls_list_price']->content; ?>
                    <?php print $fields['field_mls_list_price']->wrapper_suffix; ?>
                </div>

                <div class="mlsResultAddress">
                    <a href="mls/<?php print strip_tags($fields['field_mls_number']->content); ?>">
                        <?php print $fields['field_mls_address']->content; ?>
                        <?php print $fields['field_mls_city']->content; ?>,
                        <?php print $fields['field_mls_state']->content; ?>
                        <?php print $fields['field_l_zip']->content; ?>
                    </a>
                </div>
                <div class="mlsResultType">
                    <?php print $fields['field_mls_listing_type']->wrapper_prefix; ?>
                    <?php print $fields['field_mls_listing_type']->content; ?>
                    <?php print $fields['field_mls_listing_type']->wrapper_suffix; ?>
                </div>
                <div class="mlsResultBeds">
                    <img src="<?php print $path; ?>bed.png"/>
                    <?php print $fields['field_mls_beds']->content; ?>

                </div>
                <div class="mlsResultBaths">
                    <img src="<?php print $path; ?>bath.png"/>
                    <?php print $fields['field_mls_baths']->content; ?>
                </div>
                <div class="mlsResultButton">
                    <button onclick="window.location.href='mls/<?php print strip_tags($fields['field_mls_number']->content); ?>'" class="button-primary btn btn-default">View Details</button>
                </div>
            </div>
            <div class="mlsResultColumn3 mlsResult col-sm-4">
                <div class="mlsResultAgentPicture">
                    <div class="hibLogo"><img src="/sites/default/files/imce/hib-logo.png"/></div>
                    <div class="agentImage"><img src="<?php print $agentImage;?>"/></div>
                </div>
                <div class="mlsResultAgentName"><a href="<?php print drupal_get_path_alias('node/' .$agentNID); ?>"/><?php print $agentName; ?></a></div>
           <?php if(isset($agentPhone)) { ?> <div class="mlsResultAgentPhone"><?php print $agentPhone; ?></div><? } ?>
            </div>
        </div>
    </div>

<?php //foreach ($fields as $id => $field): ?>
    <!--   --><?php // if (!empty($field->separator)): ?>
    <!--        --><?php //print $field->separator; ?>
    <!--    --><?php //endif; ?>
    <!---->
    <!--    --><?php //print $field->wrapper_prefix; ?>
    <!--    --><?php //print $field->label_html; ?>
    <!--    --><?php //print $field->content; ?>
    <!--    --><?php //print $field->wrapper_suffix; ?>
<?php //endforeach;

}
?>