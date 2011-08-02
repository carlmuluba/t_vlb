<div class="publications form">
<?php echo $this->Form->create('Publication');?>
	<fieldset>
		<legend><?php echo __('Edit Publication'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cover_url');
		echo $this->Form->input('name');
		echo $this->Form->input('notes');
		echo $this->Form->input('type');
		echo $this->Form->input('category');
		echo $this->Form->input('visitorsip');
		echo $this->Form->input('publisher_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Publication.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Publication.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Publications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
