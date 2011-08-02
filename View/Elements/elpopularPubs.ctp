<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
$publications = $this->requestAction('publications/lastPubs/20');
 */
?>
            <?php
                $publications = $this->requestAction('publications/elpopularPubs/sort:visitorsip/direction:desc/limit:20'); 
                foreach ($publications as $publication): ?>
                <div id='block_content'>
                <div class='list_img'>
		<?php echo $this->Html->link($this->Html->image('http://localhost:8888/'.$publication['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>100, 'class'=>'img')), array('action' => 'view', $publication['Publication']['id']), array('escape' => false)); ?>
                </div>
<div class='list_txt'>
                <ul>
		<li class="txt_name">
                <?php echo $publication['Publication']['name']; ?></li>
		<li>By: <?php echo $publication['Publisher']['publisher_name']; ?></li>
			<li>Date: <?php echo $publication['Publication']['created']; ?></li>
		<li>Views: <?php echo $publication['Publication']['visitorsip']; ?></li>
		<li><?php echo $publication['Publication']['notes']; ?></li>
                </ul>
</div>
                </div>
<?php endforeach; ?>