<?php

//kpr($drealty_listing);

drupal_add_js(drupal_get_path('theme','homesinboise') . '/js/jssor.js');
drupal_add_js(drupal_get_path('theme','homesinboise') . '/js/jssor.slider.js');
drupal_add_js(drupal_get_path('theme','homesinboise') . '/js/jsinit.js');


if (isset($drealty_listing->field_mls_number['und'][0]['value'])) {
    $mlsNumber = $drealty_listing->field_mls_number['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_beds['und'][0]['value'])) {
    $beds = $drealty_listing->field_mls_beds['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_remarks['und'][0]['value'])) {
    $remarks = $drealty_listing->field_mls_remarks['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_list_price['und'][0]['value'])) {
    $listPrice = $drealty_listing->field_mls_list_price['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_baths['und'][0]['value'])) {
    $baths = $drealty_listing->field_mls_baths['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_main_image['und'])) {
    $images = $drealty_listing->field_mls_main_image['und'];
}
if (isset($drealty_listing->field_mls_listing_type['und'][0]['taxonomy_term']->name)) {
    $listingType = $drealty_listing->field_mls_listing_type['und'][0]['taxonomy_term']->name;
}
if (isset($drealty_listing->field_mls_sqft['und'][0]['value'])) {
    $sqft = $drealty_listing->field_mls_sqft['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_date_listed['und'][0]['value'])) {
    $dateListed = $drealty_listing->field_mls_date_listed['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_listing_agent['und'][0]['value'])) {
    $listingAgent = $drealty_listing->field_mls_listing_agent['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_brokered_by['und'][0]['value'])) {
    $broker = $drealty_listing->field_mls_brokered_by['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_stories['und'][0]['value'])) {
    $stories = $drealty_listing->field_mls_stories['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_status['und'][0]['value'])) {
    $status = $drealty_listing->field_mls_status['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_lot_size['und'][0]['value'])) {
    $lotSize = $drealty_listing->field_mls_lot_size['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_price_sqft['und'][0]['value'])) {
    $priceSQFT = $drealty_listing->field_mls_price_sqft['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_master_bedroom_size['und'][0]['value'])) {
    $masterBedroomSize = $drealty_listing->field_mls_master_bedroom_size['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_year_built['und'][0]['value'])) {
    $yearBuilt = $drealty_listing->field_mls_year_built['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_2_size['und'][0]['value'])) {
    $bedroom2Size = $drealty_listing->field_mls_bedroom_2_size['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_3_size['und'][0]['value'])) {
    $bedroom3Size = $drealty_listing->field_mls_bedroom_3_size['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_4_size['und'][0]['value'])) {
    $bedroom4Size = $drealty_listing->field_mls_bedroom_4_size['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_5_size['und'][0]['value'])) {
    $bedroom5Size = $drealty_listing->field_mls_bedroom_5_size['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_garages['und'][0]['value'])) {
    $garages = $drealty_listing->field_mls_garages['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_master_bedroom_level['und'][0]['value'])) {
    $masterBedLevel = $drealty_listing->field_mls_master_bedroom_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_2_level['und'][0]['value'])) {
    $bedroom2Level = $drealty_listing->field_mls_bedroom_2_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_3_level['und'][0]['value'])) {
    $bedroom3Level = $drealty_listing->field_mls_bedroom_3_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_4_level['und'][0]['value'])) {
    $bedroom4Level = $drealty_listing->field_mls_bedroom_4_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bedroom_5_level['und'][0]['value'])) {
    $bedroom5Level = $drealty_listing->field_mls_bedroom_5_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bathrooms_main_level['und'][0]['value'])) {
    $bathMainLevel = $drealty_listing->field_mls_bathrooms_main_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bathrooms_upper_level['und'][0]['value'])) {
    $bathUpperLevel = $drealty_listing->field_mls_bathrooms_upper_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_bathrooms_lower_level['und'][0]['value'])) {
    $bathLowerLevel = $drealty_listing->field_mls_bathrooms_lower_level['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_lot_width['und'][0]['value'])) {
    $lotWidth = $drealty_listing->field_mls_lot_width['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_lot_length['und'][0]['value'])) {
    $lotLength = $drealty_listing->field_mls_lot_length['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_kitchen_features['und'][0]['value'])) {
    $kitchenFeatures = $drealty_listing->field_mls_kitchen_features['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_sprinkler_system['und'][0]['value'])) {
    $sprinklerSystem = $drealty_listing->field_mls_sprinkler_system['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_irrigation['und'][0]['value'])) {
    $irrigation = $drealty_listing->field_mls_irrigation['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_irrigation_district['und'][0]['value'])) {
    $irrigationDistrict = $drealty_listing->field_mls_irrigation_district['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_school_district['und'][0]['value'])) {
    $schoolDistrict = $drealty_listing->field_mls_school_district['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_heating['und'][0]['value'])) {
    $heating = $drealty_listing->field_mls_heating['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_air_conditioning['und'][0]['value'])) {
    $airConditioning = $drealty_listing->field_mls_air_conditioning['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_sewer['und'][0]['value'])) {
    $sewer = $drealty_listing->field_mls_sewer['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_water['und'][0]['value'])) {
    $water = $drealty_listing->field_mls_water['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_fireplace['und'][0]['value'])) {
    $fireplace = $drealty_listing->field_mls_fireplace['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_elementary_school['und'][0]['value'])) {
    $elementrySchool = $drealty_listing->field_mls_elementary_school['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_high_school['und'][0]['value'])) {
    $highSchool = $drealty_listing->field_mls_high_school['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_jr_high_school['und'][0]['value'])) {
    $jrHighSchool = $drealty_listing->field_mls_jr_high_school['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_area['und'][0]['taxonomy_term']->name)) {
    $area = $drealty_listing->field_mls_area['und'][0]['taxonomy_term']->name;
}
if (isset($drealty_listing->field_mls_county['und'][0]['taxonomy_term']->name)) {
    $county = $drealty_listing->field_mls_county['und'][0]['taxonomy_term']->name;
}
if (isset($drealty_listing->field_mls_subdivision['und'][0]['taxonomy_term']->name)) {
    $subdivision = $drealty_listing->field_mls_subdivision['und'][0]['taxonomy_term']->name;
}
if (isset($drealty_listing->field_mls_directions['und'][0]['value'])) {
    $direction = $drealty_listing->field_mls_directions['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_latitude['und'][0]['value'])) {
    $lat = $drealty_listing->field_mls_latitude['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_longitude['und'][0]['value'])) {
    $long = $drealty_listing->field_mls_longitude['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_address_number['und'][0]['value'])) {
    $addressNumber = $drealty_listing->field_mls_address_number['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_address_street['und'][0]['value'])) {
    $addressStreet = $drealty_listing->field_mls_address_street['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_address['und'][0]['value'])) {
    $address = $drealty_listing->field_mls_address['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_address_direction['und'][0]['value'])) {
    $addressDirection = $drealty_listing->field_mls_address_direction['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_city['und'][0]['taxonomy_term']->name)) {
    $city = $drealty_listing->field_mls_city['und'][0]['taxonomy_term']->name;
}
if (isset($drealty_listing->field_mls_state['und'][0]['value'])) {
    $state = $drealty_listing->field_mls_state['und'][0]['value'];
}
if (isset($drealty_listing->field_l_zip['und'][0]['value'])) {
    $zip = $drealty_listing->field_l_zip['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_roofing['und'][0]['value'])) {
    $roofing = $drealty_listing->field_mls_roofing['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_pool['und'][0]['value'])) {
    $pool = $drealty_listing->field_mls_pool['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_last_updated['und'][0]['value'])) {
    $lastUpdated = $drealty_listing->field_mls_last_updated['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_tax_year['und'][0]['value'])) {
    $taxYear = $drealty_listing->field_mls_tax_year['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_taxes['und'][0]['value'])) {
    $taxes = $drealty_listing->field_mls_taxes['und'][0]['value'];
}
if (isset($drealty_listing->field_mls_kitchen_['und'][0]['value'])) {
    $kitchenAppliances = $drealty_listing->field_mls_kitchen_['und'][0]['value'];
}

setlocale(LC_MONETARY, "en_US");

function timeAgo($time)
{

    $time = time() - $time; // to get the time since that moment

    $tokens = array(
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
    }

}

?>
<div class="listingContainer">
    <div class="listingContainerInner">
        <div class="listingHeaderContainer">
            <div class="listingHeaderContainerInner">
                <div class="top col-xs-12"><h3><?php print $address . ' - ' . $city . ', ' . $state . ' ' . $zip; ?></h3></div>
                <div class="middle col-xs-12">
                    <div class="forSale row col-sm-2">
                        <i class="fa fa-home"></i>
                        <div class="forSaleText">FOR SALE</div>
                    </div>
                    <div class="row col-sm-3">
                        <div class="listPrice"><?php print money_format("%10.0n", $listPrice); ?></div>
                        <div class="listedDays"> Listed: <?php print timeAgo(strtotime($dateListed)) . ' ago'; ?></div>
                    </div>
                    <div class="row col-sm-3">
                        <div class="beds">Beds: <?php print $beds; ?></div>
                        <div class="beds">Baths: <?php print $baths; ?></div>
                    </div>
                    <div class="row col-sm-4">
                        <div class="listingType"><?php print $listingType; ?></div>
                        <div class="sqft"><?php print $sqft; ?> sq ft</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="listingContentContainer">
            <div class="listingContentContainerInner">
                <div class="listingLeftContentContainer col-xs-12">
                    <div class="listingLeftContentContainerInner">
                        <div class="imageMapsContainer">
                            <div class="imageMapContainerInner">
                                <div class="imageMapTabs">
                                    <ul>
                                        <li class="imageMapImages tabButton tabButtonActive">Photos</li>
                                        <li class="imageMapStreet tabButton">Stree View</li>
                                        <li class="imageMapMap tabButton">Map</li>
                                        <li class="imageMapSatellite tabButton">Satellite</li>
                                    </ul>
                                </div>
                                <div class="tabbedContent">
                                    <div class="imageMapContent mapImages">
                                        <!-- Jssor Slider Begin -->
                                        <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;height: 456px; background: #191919; overflow: hidden;">
                                            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                                                </div>
                                                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
                                                </div>
                                            </div>
                                            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
                                            <?php
                                            foreach ($images as $data) {
                                                print '<div>';
                                                print '   <img u="image" src="' . image_style_url('gallery_large', $data['uri']) . '"/>';
                                                print '   <img u="thumb" src="' . image_style_url('gallery_small', $data['uri']) . '"/>';
                                                print '</div>';
                                            }
                                            ?>
                                            </div>
                                            <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;"></span>
                                            <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px"></span>
                                            <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
                                                <div u="slides" style="cursor: default;">
                                                    <div u="prototype" class="p">
                                                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                                                        <div class=c></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Jssor Slider End -->
                                    </div>
                                    <div class="imageMapContent mapStreet">
                                        <iframe width="100%" height="350" frameborder="0"
                                        src="https://www.google.com/maps/embed/v1/streetview?key=AIzaSyD5H6x7p9HksOY_0kZoI8ToLBtHRGp1wU4&location=<?php print $lat . ',' . $long; ?>&heading=210&pitch=1&fov=35"></iframe>
                                    </div>
                                    <div class="imageMapContent mapMap">
                                        <iframe width="100%" height="350" frameborder="0"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD5H6x7p9HksOY_0kZoI8ToLBtHRGp1wU4&q=<?php print str_replace(" ", "+", $address) . ',' . $city . '+' . $state . '+' . $zip; ?>&zoom=12&maptype=roadmap"></iframe>
                                    </div>
                                    <div class="imageMapContent mapSatellite">
                                        <iframe width="100%" height="350" frameborder="0"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD5H6x7p9HksOY_0kZoI8ToLBtHRGp1wU4&q=<?php print str_replace(" ", "+", $address) . ',' . $city . '+' . $state . '+' . $zip; ?>&zoom=10&maptype=satellite"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description">
                            <h3>Desecription</h3>
                            <?php print $remarks; ?>
                        </div>
                        <div class="contentLeft col-xs-12 col-sm-6">
                            <ul>
                                <li><label>MLS ID#</label><?php print $mlsNumber; ?></li>
                                <li><label>Year Built:</label><?php print  $yearBuilt; ?></li>
                                <li><label>Listed:</label><?php print timeAgo(strtotime($dateListed)) . ' ago'; ?></li>
                            </ul>
                        </div>
                        <div class="contentRight col-xs-12 col-sm-6">
                            <ul>
                                <li><label>Listing Type: </label><?php print $listingType; ?></li>
                                <li><label>Beds:</label><?php print  $beds; ?></li>
                                <li><label>Baths:</label><?php print $baths; ?></li>
                            </ul>
                        </div>
                        <h2 class="moreInfoBlock">Want More Information?</h2>
                        <div class="moreInformationBlock">
                            <?php $webform = module_invoke('webform', 'block_view', 'client-block-29');
                            print $webform['content']; ?>
                            <?php //print render(module_invoke('webform', 'block_view', 'client-block-29')['content']); ?>

                        </div>
                        <div class="listingDetailsContainer">
                            <div class="listingDetailsContainerInner">
                                <div class="listingDetailsTabs">
                                    <ul>
                                        <li class="tabInterior tabButton1 tabButtonActive1">Interior</li>
                                        <li class="tabExterior tabButton1">Exterior</li>
                                        <li class="tabMoreInfo tabButton1">More Info</li>
                                        <li class="tabTaxes tabButton1">Taxes</li>
                                        <li class="tabUtilities tabButton1">Utilities</li>
                                        <li class="tabPublicFacts tabButton1">Public Facts</li>
                                        <li class="tabSchool tabButton1">Schools</li>
                                    </ul>
                                </div>
                                <div class="tabbedContent">
                                    <div class="listingTabContent tabInteriorInfo">
                                    <?php if (!empty($masterBedroomSize)) : ?>
                                        <dl>
                                            <dt>Master Bedroom</dt>
                                            <dd><?php print $masterBedroomSize; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($bedroom2Size)) : ?>
                                        <dl>
                                            <dt>Bedroom 2</dt>
                                            <dd><?php print $bedroom2Size; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($bedroom3Size)) : ?>
                                        <dl>
                                            <dt>Bedroom 3</dt>
                                            <dd><?php print $bedroom3Size; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($bedroom4Size)) : ?>
                                        <dl>
                                            <dt>Bedroom 4</dt>
                                            <dd><?php print $bedroom4Size; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($bedroom5Size)) : ?>
                                        <dl>
                                            <dt>Bedroom 5</dt>
                                            <dd><?php print $bedroom5Size; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($kitchenFeatures)) : ?>
                                        <dl>
                                            <dt>Kitchen</dt>
                                            <dd><?php print $kitchenFeatures; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($fireplace)) : ?>
                                        <dl>
                                            <dt>Fireplace</dt>
                                            <dd><?php print $fireplace; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                    <?php if (!empty($stories)) : ?>
                                        <dl>
                                            <dt>Stories</dt>
                                            <dd><?php print $stories; ?></dd>
                                        </dl>
                                    <?php endif; ?>
                                </div>
                                    <div class="listingTabContent tabExteriorInfo">
                                        <?php if (!empty($lotSize)) : ?>
                                            <dl>
                                                <dt>Lot Size</dt>
                                                <dd><?php print $lotSize; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($lotLength)) : ?>
                                            <dl>
                                                <dt>Lot Length</dt>
                                                <dd><?php print $lotLength; ?>'</dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($lotWidth)) : ?>
                                            <dl>
                                                <dt>Lot Width</dt>
                                                <dd><?php print $lotWidth; ?>'</dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($garages)) : ?>
                                            <dl>
                                                <dt>Garages</dt>
                                                <dd><?php print $garages; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($sqft)) : ?>
                                            <dl>
                                                <dt>Square Feet</dt>
                                                <dd><?php print $sqft; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($priceSQFT)) : ?>
                                            <dl>
                                                <dt>Approx Price SQFT</dt>
                                                <dd><?php print $priceSQFT; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($sprinklerSystem)) : ?>
                                            <dl>
                                                <dt>Sprinkler System</dt>
                                                <dd><?php print $sprinklerSystem; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($roofing)) : ?>
                                            <dl>
                                                <dt>Roofing</dt>
                                                <dd><?php print $roofing; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($pool)) : ?>
                                            <dl>
                                                <dt>Pool</dt>
                                                <dd><?php print $pool; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                    </div>
                                    <div class="listingTabContent tabMoreInfoInfo">
                                        <?php if (!empty($dateListed)) : ?>
                                            <dl>
                                                <dt>Date Listed</dt>
                                                <dd><?php print $dateListed; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($yearBuilt)) : ?>
                                            <dl>
                                                <dt>Year Built</dt>
                                                <dd><?php print $yearBuilt; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($water)) : ?>
                                            <dl>
                                                <dt>Water</dt>
                                                <dd><?php print $water; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($area)) : ?>
                                            <dl>
                                                <dt>Area</dt>
                                                <dd><?php print $area; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($county)) : ?>
                                            <dl>
                                                <dt>County</dt>
                                                <dd><?php print $county; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($subdivision)) : ?>
                                            <dl>
                                                <dt>Subdivision</dt>
                                                <dd><?php print $subdivision; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($direction)) : ?>
                                            <dl>
                                                <dt>Directions</dt>
                                                <dd><?php print $direction; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($lastUpdated)) : ?>
                                            <dl>
                                                <dt>Last Updated</dt>
                                                <dd><?php print $lastUpdated; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                    </div>
                                    <div class="listingTabContent tabTaxesInfo">
                                        <?php if (!empty($taxes)) : ?>
                                            <dl>
                                                <dt>Tax Amount</dt>
                                                <dd>$<?php print $taxes; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($taxYear)) : ?>
                                            <dl>
                                                <dt>Tax Year</dt>
                                                <dd><?php print $taxYear; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                    </div>
                                    <div class="listingTabContent tabUtilitiesInfo">
                                        <?php if (!empty($airConditioning)) : ?>
                                            <dl>
                                                <dt>Cooling</dt>
                                                <dd><?php print $airConditioning; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($heating)) : ?>
                                            <dl>
                                                <dt>Heating</dt>
                                                <dd><?php print $heating; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($sewer)) : ?>
                                            <dl>
                                                <dt>Sewer</dt>
                                                <dd><?php print $sewer; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($water)) : ?>
                                            <dl>
                                                <dt>Water</dt>
                                                <dd><?php print $water; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($irrigation)) : ?>
                                            <dl>
                                                <dt>Irrigation</dt>
                                                <dd><?php print $irrigation; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($irrigationDistrict)) : ?>
                                            <dl>
                                                <dt>Irrigation District</dt>
                                                <dd><?php print $irrigationDistrict; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                    </div>
                                    <div class="listingTabContent tabSchoolInfo">
                                        <?php if (!empty($schoolDistrict)) : ?>
                                            <dl>
                                                <dt>School District</dt>
                                                <dd><?php print $schoolDistrict; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($elementrySchool)) : ?>
                                            <dl>
                                                <dt>Elementry School</dt>
                                                <dd><?php print $elementrySchool; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($jrHighSchool)) : ?>
                                            <dl>
                                                <dt>Jr. High School</dt>
                                                <dd><?php print $jrHighSchool; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                        <?php if (!empty($highSchool)) : ?>
                                            <dl>
                                                <dt>High School</dt>
                                                <dd><?php print $highSchool; ?></dd>
                                            </dl>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

