<div id="wrap_container">
        <label>User Registration</label>
    <ul id="formbox_reg"> 		
				<li>
<?php echo $this->Form->create('User');?>
                <div class="step_1">
	<fieldset> 	
	<?php echo $this->Form->input('username',array('label' => 'Username:', 'class'=>'allforms_input'));
        echo $this->Form->input('password',array('label' => 'Password:', 'class'=>'allforms_input'));
        echo $this->Form->input('email',array('label'=>'Email:','class'=>'allforms_input'));
	echo $this->Form->input('user_type', array('type'=>'hidden','value'=>1)); ?>
                                
<?php echo $this->Form->end(__('Submit', true));?>
	</fieldset>
                </div>
                                </li>
    </ul>
</div>