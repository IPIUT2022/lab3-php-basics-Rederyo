с<?php

   $file = fopen("Sample.txt", "r") or die("Unable to open file!");
    $Text = fread($file, 25000);
    fclose($file);


    $parString = preg_split("/\r\n|\n|\r| /", $Text);

    $keyArray = array();

    for($i = 0; $i < count($pardString) - 2; $i += 2) {
        $keyArray[$parsedString[$i]] = $pardString[$i+1];
    }

    foreach ($keyArray as $key => $value) {
        echo "Key: \"${key}\" Value: \"${value}\" </br>";
    }

?>