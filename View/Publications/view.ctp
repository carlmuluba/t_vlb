
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
        <label>Viewing</label>
        <div id="view_box">
    <div class="topTxt_view">
   <b><?php  echo $publication['Publication']['name'];?></b> &nbsp;views: <?php echo $publication['Publication']['visitorsip'];?> &nbsp;
                        published at: <?php echo $publication['Publication']['created']; ?></div>
                        <div class="emb">
                            <embed src="http://localhost:8888/<?php echo $publisher['Publisher']['publisher_name'];?>/preview3.swf" width="700" height="450" 
                                   flashvars="xmlPath=http://localhost:8888/<?php echo $publisher['Publisher']['publisher_name'].'/'.$publication['Publication']['name'].'.xml&preloaderMessage=LOADING XML&title='.$publication['Publication']['name'];?> Publication View" wmode="transparent" />
                          </div>
                    <div class="txt_viewSwf">
			publisher: <?php echo $this->Html->link($publication['Publisher']['publisher_name'], array('controller' => 'publishers', 'action' => 'view', $publication['Publisher']['id'])); ?>
			&nbsp;<br>
			<?php echo $publication['Publication']['notes']; ?>
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
			<?php echo $this->Html->link($this->Html->image('http://localhost:8888/'.$publisher['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>80, 'class'=>'img')), array('controller' => 'publications', 'action' => 'view', $publication['id']), array('escape' => false));?>
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
		<li><?php echo $this->Html->link(__('Signup', true), array('controller'=>'Users','action' => 'register')); ?> |
	        <?php echo $this->Html->link(__('Login', true), array('controller'=>'Users','action' => 'login')); ?> </li><br>
		<li><?php echo $this->Html->link(__('Edit Publisher', true), array('controller'=>'Publishers','action' => 'edit', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Publisher', true), array('action' => 'delete', $publisher['Publisher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers', true), array('controller'=>'Publishers','action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publications', true), array('controller' => 'Publications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication', true), array('controller' => 'Publications', 'action' => 'add')); ?> </li>
	</ul>
            </div>
    </div><!--  List Wrap -->
</div>
		
