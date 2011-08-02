<?php
	       echo $this->Html->charset('UTF-8');
                echo $this->Html->script(array('jquery/jquery-1.6.1','jquery/jquery.gritter.min','jquery/jquery.form','jquery/jquery.cookie','easypaginate','jquery/organictabs.jquery')); ?>
<script>
		!window.jQuery && document.write('<script src="jquery/jquery-1.6.1.js"><\/script>');
	</script>
		<script type="text/javascript">
$(document).ready(function(){

<!-- Slider -->
	//Hide (Collapse) the toggle containers on load
	$(".toggle_container").show(); 

	//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
	$("h2.trigger").click(function(){
		$(this).toggleClass("active").next().slideToggle("slow");
		return false; //Prevent the browser jump to the link anchor
	});
	
});

<!-- Easypag -->

jQuery(function($){
	
	$('ul#items').easyPaginate({
		step:11, 
		auto:true, 
		clickstop:false,
		pause:6000,
		continuous: true
	});
	
});    
    
 </script>
<script type="text/javascript">
<!--facybox -->

jQuery(document).ready(function() {
$('a#linkFancyBox').fancybox({
'padding'             : 0,
'autoDimensions'      : false,
'width'               : 700,
'height'              : 'auto',
'transitionIn'        : 'none',
'transitionOut'       : 'none'
});
});

<!-- Tabs -->
   
$(document).ready(function(){

        $("#tabs_container").organicTabs({
            "speed": 200
        });

    });
</script>
 
<!-- 
* End Scripts
-->
<?php
echo $this->element('fancybox_links');
?>

<div class="container_pg">
        <h2 class="trigger"><a href="#">Pro Publishing</a></h2>
<div class="toggle_container">
	<div class="block">
		<h2>Professional Publications</h2>
		<p>To warranty top level publications, publishing with Vilib platform is only available for professional publishers.</p>
<br>
<p>Readers have now access to the best world publications.</p>
<div class='btn_sign'>
<?php echo $this->Html->link(__('Register', true), array('controller'=>'users','action' => 'register'));?>
</div>
<div class='btn_sign1'>
<?php echo $this->Html->link(__('Know About', true), array('controller'=>'publications','action' => 'usability'));?>
</div>
	</div>
</div>
        <div id="_middlebox">
        <div class="_middlemiddle">
<div class='txt_middle'>
<h2>All we care</h2>
<p>Digital publishing and reading preserves the environment, reduce costs and reach more audience... </p>
<span>
<a id='linkFancyBox'  href='http://localhost:8888/t_vlb/webroot/popups/digitPub.ctp'>*read more</a>
</span>
</div>
        </div>
        <div class="_middlemiddle1">
<div class='txt_middle'>
<h2>Readers best choice</h2>
<p>In one place readers have access to the world's best professional publications... </p>
<span>
<a id='linkFancyBox'  href='http://localhost:8888/t_vlb/webroot/popups/bestPub.ctp'>*read more</a>
</span>
</div>
        </div>
        <div class="_middlemiddle2">
<div class='txt_middle'>
<h2>Professional Publishing</h2>
<p>Publishers can deliver a lot of media contents in a great platform... </p>
<span>
<a id='linkFancyBox' href='http://localhost:8888/t_vlb/webroot/popups/publisher.ctp'>*read more</a>
</span>
</div>
        </div>
        </div>
<ul id='items'>
        <?php foreach ($publications as $publication):?><li>
            <p class="image">
		<?php echo $this->Html->link($this->Html->image('http://localhost:8888/'.$publication['Publisher']['publisher_name'].'/pages/cover.jpg', array('height'=>145, 'class'=>'img')), array('action' => 'view', $publication['Publication']['id']), array('escape' => false)); ?>
		</p>
            <!--span><!--?php  echo $publication['Publication']['name'];?> Views: <!--?php echo $publication['Publication']['visitorsip']; ?>
		Publisher: <!--?php echo $html->link($publication['Publisher']['publisher_name'], array('controller' => 'publishers', 'action' => 'view', $publication['Publisher']['id'])); ?>
            </span-->
</li>
	<?php endforeach; ?> </ul>
<!-- Tabs-->  
      <!------------------------------------->
   <div id="tabs_container">
        <ul class="nav">
            <li class="nav-one"><a href="#mostRead" class="current">Most Read</a></li>
            <li class="nav-two"><a href="#lastAdded">Last Added</a></li>
            <li><span><?php echo $this->Html->link(__('More Publications', true), array('action' => 'index')); ?></span></li>
        </ul>
       <div class="block_list">
       <div id="mostRead">
           <?php echo $this->element('elpopularPubs', array('cache'=> array('key'=>'elpopularPubs','time'=>'1 hour'))); ?>
            </div>
            <div id="lastAdded" class="hide"> 
           <?php echo $this->element('ellastPubs', array('cache'=> array('key'=>'ellastPubs','time'=>'1 hour'))); ?>
            </div>
    </div><!-- END List Wrap -->
  </div>
      
</div>