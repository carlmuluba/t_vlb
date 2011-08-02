<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 
$publications = $this->requestAction('publications/popularPubs/20');*/
//$paginator =& ClassRegistry::init('Paginator', 'helper'); 
?>
                <?php
                 //$publications = $this->requestAction('publications/alls/10'); 
                foreach ($publications as $publication): ?>
                <div id='blockAll_content'>
                <div class='list_img'>
		<?php echo $this->Html->link($this->Html->image('http://localhost:8888/'.$publication['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>100,'class'=>'img')), array('controller'=>'Publications','action' => 'view', $publication['Publication']['id']), array('escape' => false)); ?>
                </div>
<div class='list_txt'>
                <ul>
		<li><?php echo $publication['Publication']['name']; ?></li>
		<li>By: <?php echo $publication['Publisher']['publisher_name']; ?></li>
		<li>Date: <?php echo $publication['Publication']['created']; ?></li>
		<li>Views: <?php echo $publication['Publication']['visitorsip']; ?></li>
                </ul>
</div>
                </div>
<?php endforeach; ?>

<div id="paging">
<?php echo $this->element('pagination/bottom'); ?>
</div>