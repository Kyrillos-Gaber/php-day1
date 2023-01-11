<?php
$error = "";
$name = "";
$mail = "";
$msg = "";

if (count($_POST)) {
  $name = $_POST['name'];
  $mail = $_POST['email'];
  $msg = $_POST['message'];

  //validating
  if (strlen($name) > 10 || empty($name)) 
    $error .= "name max len is 100 char and not empty<br>";

  if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL))
    $error .= "email is not valid or empty<br>";
    
 if (empty($msg) )
    $error .= "message is empty or more than 255 char<br>";

  if ($error == "") {
    echo "Thanks for contact us<br>";
    foreach ($_POST as $key => $val) {
      if ($key != 'submit') echo "<strong>$key</strong>: $val <br>";
    }
    die("");
  }
}