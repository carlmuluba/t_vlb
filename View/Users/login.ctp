<div id="wrap_container">
        <label>Login</label>
    <ul id="formbox_login"> 		
				<li>
<?php echo $this->Form->create('User');?>
                <div class="step_1">
	<fieldset> 	
	<?php echo $this->Form->input('username',array('label' => 'Username:', 'class'=>'allforms_input'));
        echo $this->Form->input('password',array('label' => 'Password:', 'class'=>'allforms_input')); ?>
                                
<?php echo $this->Form->end(__('Login', true));?>
	</fieldset>
                </div>
                                </li>
    </ul>
</div>