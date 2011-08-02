<?php
        echo $this->Html->script(array('jquery/jquery.selectbox-0.1.3')); 
?>
<div id="wrap_container">
        <label>Edit Publisher Info</label>
    <ul id="formbox_add">	
				<li>
<?php echo $this->Form->create('Publisher');?>
                <div id="step_add">
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('publisher_name', array('label' =>'Publisher\'s Name', 'class'=>'allforms_input','readonly'=>true));
		echo $this->Form->input('contact_name', array('label' =>'Contact Name', 'class'=>'allforms_input'));
		echo $this->Form->input('country_id', array('label' =>'Country', 'class'=>'_select'));
		echo $this->Form->input('state_reg', array('label' =>'State/Region', 'class'=>'allforms_input'));
		echo $this->Form->input('city', array('label' =>'City', 'class'=>'allforms_input'));
		echo $this->Form->input('zip_code', array('label' =>'Post Code', 'class'=>'allforms_input'));?>
        </fieldset>
	<fieldset>
                    <?php
		echo $this->Form->input('notes', array('label' =>'About:','type'=>'textarea', 'class'=>'allforms_input'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Update'));?>
                </li>
    </ul>
</div>
		<script type="text/javascript">
		$(function () {
			$("._select").selectbox();
		});
		</script>
