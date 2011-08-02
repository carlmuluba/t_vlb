<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 
$publications = $this->requestAction('publications/popularPubs/20');*/
//$paginator =& ClassRegistry::init('Paginator', 'helper'); 
?>

<div id="wrap_pgs">
<?php echo $this->element('lat_nav'); ?> 
    <div class="all_results">
        <label>Last Published</label>
    <div class="inner_content">
          <?php
                foreach ($publications as $publication): ?>
                <div id='blockAll_content'>
                <div class='list_img'>
		<?php echo $this->Html->link($this->Html->image('http://localhost:8888/'.$publication['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>150, 'class'=>'img')), array('action' => 'view', $publication['Publication']['id']), array('escape' => false)); ?>
                </div>
<div class='list_txt'>
                <ul>
		<li class="txt_name"><?php echo $publication['Publication']['name']; ?></li>
		<li>By: <?php echo $publication['Publisher']['publisher_name']; ?></li>
		<li>Date: <?php echo $publication['Publication']['created']; ?></li>
		<li>Views: <?php echo $publication['Publication']['visitorsip']; ?></li>
                </ul>
</div>
    </div>
<?php endforeach; ?>
                </div>
                </div>
<div id="pager">
		<?php echo $this->Paginator->prev(__('Previous ', true), array(), null, array('class'=>'disabled'));?>
	  	<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__(' Next', true), array(), null, array('class' => 'disabled'));?>
</div>
</div>