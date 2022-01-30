<?php

$filepath = './person.txt';
$json_string = file_get_contents($filepath);
$json = json_decode($json_string, true);


foreach($json as $elem)  {
    echo($elem['MobileNo'] );
    echo("<br/>");
 }