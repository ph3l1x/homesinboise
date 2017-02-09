<?php

// Generate Custom Link

?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2 class="title"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
    ?>
  </div>
  <div class="CustomMLSLinks"><button class="button-primary btn btn-default" onclick="window.location.href='mls_search?field_mls_listing_agent_value=711&field_mls_city_tid=Boise&field_mls_list_price_value=50000&field_mls_list_price_value_1=400000'">View My Listings</button></div>

  <?php print render($content['links']); ?>
  <?php hide($content['links']['#links']['node-readmore']); ?>

  <?php print render($content['comments']); ?>

</div>
