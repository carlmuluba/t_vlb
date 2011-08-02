<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset('UTF-8'); ?>
	<title>
		<?php __('VILIB | pro publishers |'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
        	 echo $this->Html->meta('keywords',  'enter any meta keyword here',  array(), False);
        	 echo $this->Html->meta('description', 'enter any meta description here',array(), False);
		echo $this->Html->meta('icon');
                echo $this->Html->css(array('_generic','jquery.selectbox','smartpaginator'));
                echo $scripts_for_layout;
	?>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
		<?php
	        echo $this->Html->charset('UTF-8');
                echo $this->Html->script(array('jquery/jquery-1.6.1','jquery/jquery.gritter.min','jquery/jquery.form','jquery/jquery.cookie','jquery/jquery.selectbox-0.1.3.min','slotmachine','fileuploader','easypaginate','jquery/form-fun.jquery'));
                echo $this->Html->script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js','https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js',
    'http://bp.yahooapis.com/2.4.21/browserplus-min.js','plupload/js/plupload','plupload/js/plupload.gears','plupload/js/plupload.silverlight','plupload/js/plupload.flash','plupload/js/plupload.html4',
    'plupload/js/plupload.html5','plupload/js/jquery.ui.plupload/jquery.ui.plupload')); 
                echo $scripts_for_layout;
                ?>
    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <script type="text/javascript">
         var timeout    = 500;
        var closetimer = 0;
        var ddmenuitem = 0;

        function dropdown_open()
        {  dropdown_canceltimer();
           dropdown_close();
           ddmenuitem = $(this).find('ul').css('visibility', 'visible');}

        function dropdown_close()
        {  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

        function dropdown_timer()
        {  closetimer = window.setTimeout(dropdown_close, timeout);}

        function dropdown_canceltimer()
        {  if(closetimer)
           {  window.clearTimeout(closetimer);
              closetimer = null;}}

        $(document).ready(function()
        {  $('#dropdown > li').bind('mouseover', dropdown_open)
           $('#dropdown > li').bind('mouseout',  dropdown_timer)});
       

        document.onclick = dropdown_close;
    </script>
</head>
<body>
	<div id="container">
		<!--div id="header"-->
		<div class="header_box">
			<h1><?php echo $this->Html->link(__('vilib', true), 'http://vilib.net'); ?></h1>
		<div class="searchform">
<?php echo $this->Form->create('Publication', array('Controller'=>'Publications','action'=>'search'));?>
	<?php echo $this->Form->input('Search.name',array('label'=>'','class'=>'_input'));?>
<?php echo $this->Form->end(__('Find Publication', true));?>
                </div>
		<div class="headermenu">
                    <ul id="dropdown">
		          <li class="main"><a href="#">Go To</a>
		              <ul class="subnav">
			<li><?php echo $this->Html->link(__('Home', true), array('action' => '../')); ?></li>
			<li><?php echo $this->Html->link(__('Publications', true), array('controller'=>'publications','action' => 'index')); ?></li>
			         </ul>
			      </li></ul>
                    <ul class="header_links">
			      <li><?php echo $this->Html->link(__('Register', true), array('controller'=>'users','action' => 'register')); ?></li>
			         
			      <li><?php echo $this->Html->link(__('Login', true), array('controller'=>'users','action' => 'login')); ?></li>
			 </ul>
                </div>
                </div>
                <!--/div-->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<!--?php echo $this->Html->link(
					$this->Html->image('cake.power.gifajax-loader', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?-->
		</div>
	</div>
	<!--?php echo $this->element('sql_dump'); ?-->
</body>
</html>