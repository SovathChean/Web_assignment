<?php 

require_once(__DIR__ . '/classes/ABA.php');
require_once(__DIR__ . '/classes/Wing.php');
require_once(__DIR__ . '/classes/Pipay.php');
require_once(__DIR__ . '/libs/display.php');
$items = [
    new ABA(5, 5, 1),
    new Wing(10, 3, 1),
    new ABA(2, 1, 3),
    new Pipay(13, 7, 1),
    new ABA(2, 5, 1),
    new Wing(9, 3, 1),
    new ABA(16, 4, 1),
    new Pipay(5, 6, 1),
    new Wing(4, 1, 1),
    
];
//display ABA method
echo 'Number of sales by ABA method are ';

$abaItems = array_filter($items, fn($var) => get_class($var) == 'ABA');
echo count($abaItems);
echo '</br>';
display($abaItems);
echo '</br>';
//display Wing and Pipay method
echo 'Number of sales by Pipay and Wing method are ';

$wingAndPipay = array_filter($items, fn($var) => ( get_class($var) == 'Pipay' || get_class($var) == 'Wing'));
echo count($wingAndPipay);
echo '</br>';
display($wingAndPipay);
echo '</br>';
echo  'Display all sales ordering by biggest total amount';
echo '</br>';

$cloneItems = $items;
    usort(
        $cloneItems, 
        fn($item1, $item2) => $item2->returnTotal() <=> $item1->returnTotal()
  );

display($cloneItems);
?>