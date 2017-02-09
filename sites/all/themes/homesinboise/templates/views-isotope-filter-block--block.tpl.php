<?php
/** BEDS!!!!!!!!!!!
 * @file views-isotope-filter-block.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$options = '';
$path = path_to_theme('theme', 'homesinboise');
?>
<div class="isotope-options">
    <div class="isotope-filter option-set clearfix" data-option-key="filter">
        <div class="bed-container">
            <div class="bed off"><img src="<?php print $path; ?>/images/bed-off.png"> Beds</div>
            <div class="bed on remove"><img src="<?php print $path; ?>/images/bed-on.png"> Beds</div>
            <ul id="nav-shadow" class="isotope-filters remove option-set clearfix" data-option-key="filter">
                <li class="button-color-1">
		    <a href="#filter" data-option-value="*" class="selected"><?php print t('All'); ?></a>
		    <img alt="" src="<?php print $path; ?>/images/icons-shadow.jpg" class="shadow">
		</li>
                <?php foreach($rows as $id=>$row): ?>
                <?php
                    // Sanitize filter value.
                    $dataoption = trim(strip_tags(strtolower($row)));
                    $dataoption = str_replace(' ', '-', $dataoption);
                    $dataoption = str_replace('/', '-', $dataoption);
                    $dataoption = str_replace('&amp;', '', $dataoption);
                ?>
                    <li class="button-color-1">
			<a id="nav-shadow" class="filterbutton" data-option-value=".beds<?php print $dataoption; ?>" href="#filter"><?php print trim($row); ?></a>
			<img alt="" src="<?php print $path; ?>/images/icons-shadow.jpg" class="shadow">
		    </li>
                <?php endforeach; ?>
            </ul>
        </div> <!-- /bath-container -->
    </div> <!-- /isotop-filters -->
</div> <!-- /isotope-options -->
    
    
    
    
    
    
<!--  <ul class="isotope-filters option-set clearfix" data-option-key="filter">
  
  	<li><a href="#filter" data-option-value="*" class="selected"><?php print t('All'); ?></a></li>
    <?php foreach ( $rows as $id => $row ): ?>
      <?php
        
      
      ?>
      <?php
        // Sanitize filter value.
        $dataoption = trim(strip_tags(strtolower($row)));
        $dataoption = str_replace(' ', '-', $dataoption);
        $dataoption = str_replace('/', '-', $dataoption);
        $dataoption = str_replace('&amp;', '', $dataoption); 
      ?>
          
      <li><a class="filterbutton" data-option-value=".beds<?php print $dataoption; ?>" href="#filter"><?php print trim($row); ?></a></li>
			
    <?php endforeach; ?>
    
  </ul>  
</div>-->