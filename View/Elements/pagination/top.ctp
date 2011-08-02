<?php
$results = array();
foreach ((array)$paginationOptions as $option) {
if ($paginationLimit == $option) {
$results[] = $option;
} else {
$args = $this->passedArgs;
$args['Paginate'] = $option;
$results[] = $html->link($option, $args);
}
}
echo implode(" | ", $results);
?>

<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%.', true)
));
?>
