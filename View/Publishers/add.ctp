<?php
        echo $this->Html->script(array('jquery/jquery.selectbox-0.1.3')); 
?>
<div id="wrap_container">
        <label>Add Publisher Info</label>
    <ul id="formbox_add">	
				<li>
<?php echo $this->Form->create('Publisher');?>
                <div id="step_add">
	<fieldset>
	<?php
		echo $this->Form->input('Publisher.publisher_name', array('label' =>'Publisher\'s Name', 'class'=>'allforms_input'));
                echo $this->Form->input('Publisher.contact_name', array('label' => 'Contact Name:', 'class'=>'allforms_input'));
		echo $this->Form->input('Publisher.country_id',array('type'=>'select','value'=>'Country.name','label'=>'Country','id'=>'country_id','class'=>'_select','empty' => 'Please Select'));		
                echo $this->Form->input('Publisher.state_reg', array('label' => 'State/Region:', 'class'=>'allforms_input'));
                echo $this->Form->input('Publisher.city', array('label' => 'City:', 'class'=>'allforms_input')); ?>
        </fieldset>
	<fieldset>
                    <?php
		echo $this->Form->input('Publisher.zip_code', array('label' => 'Post Code:', 'class'=>'allforms_input'));
		echo $this->Form->input('Publisher.phone', array('label' => 'Phone Number:', 'class'=>'allforms_input'));
                echo $this->Form->input('Publisher.notes', array('label' =>'About:','type'=>'textarea', 'class'=>'allforms_input'));
		?>
 </fieldset>
	<?php echo $this->Form->end(__('Submit'));?>

                                </li>
    </ul>
</div>
		<script type="text/javascript">
		$(function () {
			$("._select").selectbox();
		});
		</script>
