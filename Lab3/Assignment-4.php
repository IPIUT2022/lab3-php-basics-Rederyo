<?php

   $ordered = array('1', '2', '3', '4', '5');

    echo "Original Array </br>";
    foreach($ordered as $ord) {
        echo $ord . "\n";
    }

    print "</br>";

    array_splice($ordered, 3, 0,'$');
    echo "After inserting $ </br>";
    foreach($ordered as $ord) {
        echo $ord ."\n";
    }

?>