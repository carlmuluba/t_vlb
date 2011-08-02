<?php
	        echo $this->Html->charset('UTF-8');
                echo $this->Html->script(array('jquery/organictabslat.jquery'));
 ?>

<!-- Tabs -->
<script type='text/javascript'>
    $(function() {

        $("#latbox-wrap").organicTabsLat({
            "speed": 200
        });

    });
</script>
<div class="swf_view">
        <label>Publishers List</label>
        <div id="view_box">
	<?php
	foreach ($publishers as $publisher): ?><p>
    <div class="topTxt_view">
		<b><?php echo $this->Html->link($publisher['Publisher']['publisher_name'], array('controller' => 'publishers', 'action' => 'view', $publisher['Publisher']['id'])); ?></b>,&nbsp;
		<?php echo h($publisher['Publisher']['state_reg']); ?>,&nbsp;
		<?php echo h($publisher['Publisher']['city']); ?>,&nbsp;
		<?php echo h($publisher['Country']['name']); ?>&nbsp;
                    </div></p>
<?php endforeach; ?>
        </div>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

<!-- Tabs -->
	<div id="latbox-wrap">
        <ul class="latnav">
            <li class="nav-one"><a href="#related" class="current">Related</a></li>
            <li class="nav-two"><a href="#browse">Browse</a></li>
            </ul>
       <div id="latblock_list">
       <div id="related"> 
           <?php echo $this->element('elpopularPubs1', array('cache'=> array('key'=>'elpopularPubs1','time'=>'1 hour'))); ?>
            </div>
       </div>
            <div id="browse" class="hide"> 
           <ul>
		<li><?php echo $this->Html->link(__('Signup', true), array('controller'=>'users','action' => 'register')); ?> |
	        <?php echo $this->Html->link(__('Login', true), array('controller'=>'users','action' => 'login')); ?> </li><br>
		<li><?php echo $this->Html->link(__('Edit Publisher', true), array('action' => 'edit', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Publisher', true), array('action' => 'delete', $publisher['Publisher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publications', true), array('controller' => 'publications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication', true), array('controller' => 'publications', 'action' => 'add')); ?> </li>
	</ul>
            </div>
    </div><!--  List Wrap -->
</div>
