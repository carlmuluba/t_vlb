
<div id="wrap_container">
        <label>Create Subdomain</label>
    <ul id="formbox_subdom">	
				<li>
<?php echo $this->Form->create('create_subdomain', array('url'=>'http://vilib.net/subdomain_creator.php?cpaneluser=vilibnet&cpanelpass=kipakassa&domain=vilib.net&subdomain=SUBDOMAIN'));?>
	<fieldset>
                <div class="step_subdom">
	<?php
		echo $this->Form->input('id',array('type' =>'hidden'));
		echo $this->Form->input('subdomain', array('class'=>'allforms_input'));//'value'=>$publisher['Publisher']['publisher_name'],'label' => 'Subdomain:', 'class'=>'subdom_input','name'=>'subdomain','readonly'=>true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Procced', true));?>
                <div class="sub_domtxt">
                <span>.vilib.net</span>
                </div>
                </div>
</li>
    </ul>
</div>
