<?php
//kpr($node);

function convertPhone($phone) {

  $phone = str_replace('-', '.', $phone);
  $phone = str_replace('(', ' ', $phone);
  $phone = str_replace(')', '.', $phone);

  return $phone;
}

if(isset($node->field_name['und'][0]['value'])) { $name = $node->field_name['und'][0]['value']; } else { $name = NULL; }
if(isset($node->field_email['und'][0]['value'])) { $email = $node->field_email['und'][0]['value']; } else { $email = NULL; }
if(isset($node->field_phone['und'][0]['value'])) { $phone = convertPhone($node->field_phone['und'][0]['value']); } else { $phone = NULL; }
if(isset($node->field_agent_image['und'][0]['uri'])) { $image = image_style_url('agent_staff_picture_on_meet_team_page', $node->field_agent_image['und'][0]['uri']); } else { $image = NULL; }
if(isset($node->field_bio['und'][0]['value'])) { $bio = $node->field_bio['und'][0]['value']; } else { $bio = NULL; }
if(isset($node->field_facebook['und'][0]['value'])) { $facebook = $node->field_facebook['und'][0]['value']; } else { $facebook = NULL; }
if(isset($node->field_linkedin['und'][0]['value'])) { $linkedin = $node->field_linkedin['und'][0]['value']; } else { $linkedin = NULL; }
if(isset($node->field_credentials['und'][0]['value'])) { $credentials = $node->field_credentials['und'][0]['value']; } else { $credentials = NULL; }
if(isset($node->field_past_projects['und'][0]['value'])) { $pastProjects = $node->field_past_projects['und'][0]['value']; } else { $pastProjects = NULL; }
if(isset($node->field_current_projects['und'][0]['value'])) { $currentProjects = $node->field_current_projects['und'][0]['value']; } else { $currentProjects = NULL; }
if(isset($node->field_office_number['und'][0]['value'])) { $officeNumber = convertPhone($node->field_office_number['und'][0]['value']); } else { $officeNumber = NULL; }
if(isset($node->field_fax['und'][0]['value'])) { $fax = convertPhone($node->field_fax['und'][0]['value']); } else { $fax = NULL; }
if(isset($node->field_mls_agent_id['und'][0]['value'])) { $agentID = $node->field_mls_agent_id['und'][0]['value']; } else { $agentID = NULL; }



?>
<div class="agentProfileContainer">
  <div class="agentProfileContainerInner">
    <div class="agentTopAreaContainer">
<!--      <div class="agentName">--><?php //print $name; ?><!--</div>-->
      <div class="agentTopAreaInner">
        <div class="agentTopAreaLeft">
          <div class="agentPicture">
            <img src="<?php print $image; ?>">
          </div>
          <div class="agentPhones">
            <?php if(isset($phone)) { ?><div class="agentCell">C: <?php print $phone; ?></div> <?php } ?>
            <?php if(isset($officeNumber)) { ?><div class="agentCell">O: <?php print $officeNumber; ?></div><?php } ?>
            <?php if(isset($fax)) { ?><div class="agentCell">F: <?php print $fax; ?></div><?php } ?>
          </div>
          <div class="agentSocialMedia">
            <?php if(isset($facebook)) { ?><div><a href="<?php print $facebook; ?>" target="_BLANK"><div class="facebook">FaceBook</div></a></div><?php } ?>
            <?php if(isset($linkedin)) { ?><div><a href="<?php print $linkedin; ?>" target="_BLANK"><div class="linkedin">Linkedin</div></a></div><?php } ?>
          </div>
        </div>
        <div class="agentTopAreaRight">
          <?php if(isset($bio)) { ?><div class="agentBio"><?php print $bio; ?></div>
          <hr/><?php } ?>
          <?php if(isset($credentials)) { ?><h2>Credentials</h2>
          <div class="agentCredentials agentProjects"><?php print $credentials; ?></div>
          <hr/><?php } ?>
          <?php if(isset($currentProjects)) { ?><h2>Current Projects</h2>
          <div class="agentCurrentProjects agentProjects"><?php print $currentProjects; ?></div>
          <hr/><?php } ?>
          <?php if(isset($pastProjects)) { ?><h2>Past Projects</h2>
          <div class="agentPastProjects agentProjects"><?php print $pastProjects; ?></div><?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>