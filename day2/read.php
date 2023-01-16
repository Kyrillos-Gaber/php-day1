<?php

$flog = file_exists($logFile)? file($logFile) : 0 ;

if ($flog)
{
  foreach ($flog as $line) {
    $arr = explode(",", $line);
    echo "<br>";
    echo "Visited Date: ". $arr[0] . "<br>";
    echo "Ip address: ". $arr[1] . "<br>";
    echo "Email: ". $arr[2] . "<br>";
    echo "Name: ". $arr[3] . "<br>";
    echo "<br><hr><br>";
  }
}

