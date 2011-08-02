<?php
?>
<?= $this->Html->script(array('jquery/organictabslat.jquery')); ?>

<!-- Tabs -->
<script type='text/javascript'>
    $(function() {

        $("#latbox-wrap").organicTabsLat({
            "speed": 200
        });

    });
</script>
<div class="swf_view">
        <label>Viewing Publisher</label>
        <div id="view_box">
    <div class="topTxt_view">
	<b><?php echo h($publisher['Publisher']['contact_name']); ?></b>
            &nbsp;from: <?php echo h($publisher['Publisher']['state_reg']); ?>, <?php echo h($publisher['Publisher']['city']); ?>, <?php echo h($publisher['Country']['name']); ?><br>
			<?php echo h($publisher['Publisher']['notes']); ?>
			&nbsp;
	</div>
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
           <?php if (!empty($publisher['Publication'])):?>
	<?php
		$i = 0;
		foreach ($publisher['Publication'] as $publication):?>
                    <div class="img_tab">
			<?php echo $this->Html->link($this->Html->image('http://localhost:8888/'.$publisher['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>80)), array('controller' => 'publications', 'action' => 'view', $publication['id']), array('escape' => false));?>
                    </div> 
                    <div class="txt_tab">
			<b><?php echo $publication['name'];?></b> <br>views: <?php echo $publication['visitorsip'];?> <br>date: <?php echo $publication['created'];?>
                    </div>
	<?php endforeach; ?>
                </div>
<?php endif; ?>
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

	</div> <!-- END Tabs -->
</div>