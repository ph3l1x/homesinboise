<?php

//?field_mls_list_price_value=90000
//&field_mls_list_price_value_1=600000
//&field_mls_city_tid=Boise
//&field_mls_baths_value=5
//&field_mls_beds_value=5
//&field_mls_sqft_value=1000
//&field_mls_listing_type_tid=14
//&sort_bef_combine=field_mls_list_price_value+DESC

$optionMin = '<option value="">Min</option>';
$optionMax = '<option value="">Max</option>';

for ($n = 50000; $n <= 10000000; $n += 25000) {

    if ($n >= 500001) {
        $n += 25000;
    }
    if ($n >= 1000001) {
        $n += 50000;
    }
    if ($n >= 3000001) {
        $n += 150000;
    }

    if ($n == 50000) {
        $optionMin .= '<option selected="selected" value="' . $n . '">$' . number_format($n, 0) . '</option>';
    } else {
        $optionMin .= '<option value="' . $n . '">$' . number_format($n, 0) . '</option>';
    }
    if ($n == 400000) {
        $optionMax .= '<option selected="selected" value="' . $n . '">$' . number_format($n, 0) . '</option>';
    } else {
        $optionMax .= '<option value="' . $n . '">$' . number_format($n, 0) . '</option>';
    }
}

$listingsCount = number_format(db_query("SELECT id from drealty_listing")->rowcount());
?>



<div class="mlsSearchContainer  col-sm-12 col-md-12 col-md-9 col-lg-8">
    <div class="mlsSearchInner">
        <div class="col-sm-12 frontPageMLSSearchBlurb">
            The most comprehensive up to the minute MLS search in the Treasure Valley
        </div>
        <form name="frontPageMLSSearch" method="get" action="mls_search" id="front-page-search">
            <div class="col-sm-3 frontMLSSearchLocation form-type-textfield form-item-name form-item form-group"
                 title="" data-toggle="tooltip"
                 data-original-title="Enter your either the City, ZIP Code or MLS Number.">
                <label>Location</label>
                <input name="field_mls_city_tid" type="text" value="Boise"
                       class="form-control form-text frontMLSSearchLocation cityAutocomplete"/>
            </div>

            <div class="col-sm-6 frontMLSSearchPriceRange">
                <div class="frontMLSSearchPriceRangeLow form-type-textfield form-item-name form-item form-group"
                    title="" data-toggle="tooltip"
                    data-original-title="Enter the minimum price you are willing to pay.">
                    <label>Price Range</label>
                    <select name="field_mls_list_price_value" id="minimum_price" class="form-control form-select">
                        <?php print $optionMin; ?>
                    </select>
                </div>
                <div class="frontMLSSearchOr"><label>or</label></div>
                <div class="frontMLSSearchPriceRangeHigh form-type-textfield form-item-name form-item form-group"
                    title="" data-toggle="tooltip"
                    data-original-title="Enter the maximum price you are willing to pay.">
                    <label>&nbsp;</label>
                    <select name="field_mls_list_price_value_1" id="maximum_price" class="form-control form-select">
                        <?php print $optionMax; ?>
                    </select>
                </div>
            </div>

            <div class="col-sm-3 frontMLSSearchSubmit">
                <button class="btn btn-default form-submit MLSSearch" type="submit"><i class="fa fa-search"></i> Search
                </button>
            </div>
        </form>
    </div>
    <div class="MLSSearchBottom col-xs-12">
        <div class="MLSSearchBottomLeft">Need More Options? <a href="/mls_search">Try our Advanced Search</a></div>
        <div class="MLSSearchBottomRight"><?php print $listingsCount;?> Properties Available</div>
    </div>
</div>
