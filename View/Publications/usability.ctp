<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
	       echo $this->Html->charset('UTF-8');
                echo $this->Html->script(array('jquery/jquery-1.6.1','easySlider/easySlider1.7')); 
?>
<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({ 
				numeric: true
			});
		});	
</script>

<div id="wrap_container">
        <label>How Does it Work?</label>
    <div class="box">
    <div id="slider"> 
<ul>		
				<li><a href="http://templatica.com/preview/30"><img src="images/01.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/7"><img src="images/02.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/25"><img src="images/03.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/26"><img src="images/04.jpg" alt="Css Template Preview" /></a></li>
				<li><a href="http://templatica.com/preview/27"><img src="images/05.jpg" alt="Css Template Preview" /></a></li>
</ul>
    </div>
        <p>Step by Step...</p>
    </div>
</div>
