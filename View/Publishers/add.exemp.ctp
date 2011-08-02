<div class="publishers form">
<?php echo $this->Form->create('Publisher');?>
	<fieldset>
		<legend><?php echo __('Add Publisher'); ?></legend>
	<?php
		echo $this->Form->input('contact_name');
		echo $this->Form->input('publisher_name');
		echo $this->Form->input('notes');
		echo $this->Form->input('user_id');
		echo $this->Form->input('profile_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_reg');
		echo $this->Form->input('city');
		echo $this->Form->input('zip_code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Publishers'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publications'), array('controller' => 'publications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication'), array('controller' => 'publications', 'action' => 'add')); ?> </li>
	</ul>
</div>
