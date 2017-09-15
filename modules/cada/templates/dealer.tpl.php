<?php //dpm($variables);
$d = $variables['user'];
?>
<div class="dealer-details">
  <div class="dealer-name"><?php print($d['name']); ?></div>
  <div class="contact"><?php print($d['contact']); ?></div>
  <div class="address"><?php print($d['address']); ?></div>
  <div class="phone"><?php print(l($d['phone'], 'tel://' . $d['phone'])); ?></div>
  <div class="email"><?php print(l($d['email'], 'mailto://' . $d['email'])); ?></div>
  <?php if ($d['fax']) { ?>
    <div class="fax"><?php print($d['fax']); ?></div>
  <?php } ?>
  <?php if ($d['web']) { ?>
    <div class="web"><?php print(l($d['web'], $d['web'])); ?></div>
  <?php } ?>
  <?php 
    if ($d['id']) {
      print(l('See all antiques', 'dealer-antiques/' . $d['id']));
    } 
  ?>
  
  