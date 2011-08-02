<?php
                echo $this->Html->script(array('jquery/jquery.selectbox-0.1.3')); 
                ?>
<div id="wrap_container">
        <label>Add Publication</label>
    <ul id="formbox_add">	
				<li>
<?php echo $this->Form->create('Publication');?>
                <div id="step_add">
	<fieldset>
	<?php
		echo $this->Form->input('name',array('label' => 'Username:', 'class'=>'allforms_input'));
		echo $this->Form->input('type',array('type'=>'select','label'=>'Publication Type:','value'=>'Type.type', 'class'=>'_select','id'=>'type_id', 'empty' => 'Please Select'));
		echo $this->Form->input('category',array('type'=>'select','label'=>'Publication Category:','value'=>'Category.category', 'class'=>'_select', 'id'=>'category_id','empty' => 'Please Select'));?>
            </fieldset>
                    <fieldset>
	<?php	echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add'));?>
                </div>
                                </li>
    </ul>
</div>
    <script type="text/javascript">
        $(function () {
            $("._select").selectbox();
});
    </script>
