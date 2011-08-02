<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="latnav">
        	<ul id="menu_budy" style="display: block;">
                <li><?php echo $this->Html->link(__('All', true), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Most Read', true), array('action' => 'popularpubs')); ?></li>
                <li><?php echo $this->Html->link(__('Last Published', true), array('action' => 'lastpubs')); ?></li>
                    <span>&nbsp;by TYPE</span>
                <li><?php echo $this->Html->link(__('Article or Essay', true), array('action' => 'tartessays')); ?></li>
                <li><?php echo $this->Html->link(__('Book', true), array('action' => 'tbooks')); ?></li>
                <li><?php echo $this->Html->link(__('Catalog', true), array('action' => 'tcatalogs')); ?></li>
                <li><?php echo $this->Html->link(__('Journal', true), array('action' => 'tjournals')); ?></li>
                <li><?php echo $this->Html->link(__('Magazine', true), array('action' => 'tmagzs')); ?></li>
                <li><?php echo $this->Html->link(__('Manual or Resource', true), array('action' => 'tmanresorces')); ?></li>
                <li><?php echo $this->Html->link(__('Newspaper', true), array('action' => 'tnews')); ?></li>
                <li><?php echo $this->Html->link(__('Paper', true), array('action' => 'tpapers')); ?></li>
                <li><?php echo $this->Html->link(__('Photo album', true), array('action' => 'tphotalbums')); ?></li>
                <li><?php echo $this->Html->link(__('Portfolio', true), array('action' => 'tportfolios')); ?></li>
                <li><?php echo $this->Html->link(__('Presentation', true), array('action' => 'tpresents')); ?></li>
                <li><?php echo $this->Html->link(__('Report', true), array('action' => 'treports')); ?></li>
                <li><?php echo $this->Html->link(__('Other', true), array('action' => 'tothers')); ?></li>
                <span>&nbsp;by CATEGORY</span>
                <li><?php echo $this->Html->link(__('Entertainment & Leisure', true), array('action' => 'centertleisures')); ?></li>
                <li><?php echo $this->Html->link(__('Business & Finance', true), array('action' => 'cbusinessfinances')); ?></li>
                <li><?php echo $this->Html->link(__('Hobbies', true), array('action' => 'chobbies')); ?></li>
                <li><?php echo $this->Html->link(__('Law & Order', true), array('action' => 'claworders')); ?></li>
                <li><?php echo $this->Html->link(__('Fiction', true), array('action' => 'cfictions')); ?></li>
                <li><?php echo $this->Html->link(__('History', true), array('action' => 'chistories')); ?></li>
                <li><?php echo $this->Html->link(__('Self', true), array('action' => 'cselves')); ?></li>
                <li><?php echo $this->Html->link(__('Special Interest', true), array('action' => 'cspecialinterests')); ?></li>
                <li><?php echo $this->Html->link(__('Health & Living', true), array('action' => 'chealthlivings')); ?></li>
                <li><?php echo $this->Html->link(__('General Interest', true), array('action' => 'cgeneralinterests')); ?></li>
                <li><?php echo $this->Html->link(__('Educational', true), array('action' => 'ceducationals')); ?></li>
                </ul>
</div>