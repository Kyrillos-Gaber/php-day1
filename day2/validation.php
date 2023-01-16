<?php

include_once("config.php");

$error = "";
$name = "";
$mail = "";
$msg = "";

if (count($_POST)) {
  $name = $_POST['name'];
  $mail = $_POST['email'];
  $msg = $_POST['message'];

  //validating
  if (strlen($name) > $nameMaxLen || empty($name)) 
    $error .= "name max len is 100 char and not empty<br>";

  if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL))
    $error .= "email is not valid or empty<br>";
    
 if (empty($msg) )
    $error .= "message is empty or more than 255 char<br>";

  if ($error == "") {
    echo "Thanks for contact us<br>";

    //DAY 2 ASSIGNMENT

    $flog = fopen($logFile, "a+");

    $toWrite = date('F j Y g:i a') . "," . $_SERVER['REMOTE_ADDR'] ."," . "$mail,$name" . PHP_EOL; 

    fwrite($flog, $toWrite);

    fclose($flog);

    include_once("read.php");

    //END DAY 2 ASSIGNMENT

    die("");
  }
}