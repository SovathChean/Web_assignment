<?php
 
    function display($items)
    {
        $i = 0;
        echo '<table border="1">';
                echo '<thead>';
                    echo '<tr>';
                        echo '<th> item </th>';
                        echo '<th> Price </th>';
                        echo '<th> Quantity </th>';
                        echo '<th> Method </th>';
                        echo '<th> Total </th>';
                    echo '</tr>';
                echo '</thead>';
                
            foreach ($items as $item) {
               
                echo '<tbody>';
                    echo '<tr>';
                        echo '<td> item' .++$i. '</td>';
                        echo '<td>' . $item->returnPrice(). '</td>';
                        echo '<td>' . $item->returnQuantity() . '</td>';
                        echo '<td>' . get_class($item) . '</td>';
                        echo '<td>' . $item->returnTotal() . '</td>';
                    echo '</tr>';
                echo '</tbody>';
            }
        echo '</table>';
    }

?>