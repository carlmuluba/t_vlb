<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript">
<!--facybox -->

jQuery(document).ready(function() {
$('a#linkFancy').fancybox({
'padding'             : 0,
'autoDimensions'      : false,
'width'               : 700,
'height'              : 'auto',
'transitionIn'        : 'none',
'transitionOut'       : 'none'
});
});

</script>
<?php
echo $this->element('fancybox_links');
?>
<div id="wrap_container">
        <label>Registration</label>
    <ul id="box_reg"> 		
				<li>
                                    <div>
                                        <div class="topbox_txt">FREE</div>
                                        <div class="bottombox_txt">Signup for a free user account as a reader.<br><b><i>Apply Now</i></b></div>
                                        </div>  
                                </li>
				<li>
                                    <div>
                                        <div class="topbox_txt2">FREE</div>
                                        <div class="bottombox_txt2">for non profit institutions</div>
                                        <div class="bottombox_txt">All publisher package capabilities.<br>
                                            <i>
<span>
<a id='linkFancy'  href='http://localhost:8888/vilibPro/webroot/popups/digitPub.ctp'>*read more...</a>
</span></i></div>
                                        </div>    
                                </li>
				<li>
                                    <div>
                                        <div class="topbox_txt3">320<span>€</span></div>
                                        <div class="bottombox_txt3">one year fee</div>
                                        <div class="bottombox_txt">Full professional publisher package with unlimited publications and issues.<br><b>
                                                <i>
<span>
<a id='linkFancy'  href='http://localhost:8888/vilibPro/webroot/popups/digitPub.ctp'>*read more...</a>
</span></i></b></div>                 </li>
            <li class="bbreg1">
<?php echo $this->Html->link(__('Register', true), array('controller'=>'users','action' => 'add_reader'));?>
                                </li>
				<li class="bbreg2">
<?php echo $this->Html->link(__('Apply', true), array('controller'=>'users','action' => 'register'));?>
                                </li>
				<li class="bbreg3">
<?php echo $this->Html->link(__('Register', true), array('controller'=>'users','action' => 'add_publisher'));?>
                                </li>
    </div>
