
<div class="list-wrap">
        	<div id="featured">
                <div id='block_list'>
          <?php if(!empty($publications)){ ?>
         <?php foreach ($publications as $publication): ?>
                <div id='block_content'>
                <div class='list_img'>
		<?php echo $html->link($html->image('http://localhost:8888/'.$publication['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>160)), array('action' => 'view', $publication['Publication']['id']), array('escape' => false)); ?>
                </div>
<div class='list_txt'>
                <ul>
		<li><?php echo $publication['Publication']['name']; ?></li>
		<li>By: <?php echo $publication['Publisher']['publisher_name']; ?></li>
			<li>Date: <?php echo $publication['Publication']['created']; ?></li>
		<li>Views: <?php echo $publication['Publication']['visitorsip']; ?></li>
		<li><?php echo $publication['Publication']['notes']; ?></li>
                </ul>
</div>
                </div>
<?php endforeach; ?>
          <?php 
                } else  {
     echo '<p>Sorry no publication found! Please try again!</p>';
  } ?>
	</div>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>

	</div>
	</div>
