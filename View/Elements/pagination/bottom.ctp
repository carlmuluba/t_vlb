<?php echo $paginator->prev(__('Prev ', true), array('url' => $this->passedArgs), null, array('id'=>'prev','class'=>'disabled'));?>
 <?php echo $paginator->numbers(array('url' => $this->passedArgs));?>
<?php echo $paginator->next(__(' Next', true), array('url' => $this->passedArgs), null, array('id'=>'next','class'=>'disabled'));?>
