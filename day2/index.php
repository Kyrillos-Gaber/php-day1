<?php
  include "validation.php";

  /* w+ read and over write */
/*
  $counter = (file_exists("log.txt"))?file_get_contents("log.txt"):0;
  $counter++;
  $fp = fopen("log.txt", "w+");


  fwrite($fp, $counter);

  fclose($fp);
  echo $counter;


  $lines = file("details.txt");
  foreach ($lines as $l) echo "<br> $l";

  $personArr = array(
    "name" => "Ali",
    "age" => 20,
  );

  $mutiArr = array(
    1 => array(
      "name" => "ali",
      "age" => 20
    ),
  );

  var_dump($mutiArr);
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div>
    <h3> Contact Form </h3>
    <div id="after_submit">
        <strong style="color: red"> <?php echo $error?> </strong> <br> <br>
    </div>
    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

        <div class="row">
            <label class="required" for="name">Your name:</label><br />
            <input id="name" class="input" name="name" type="text" value="<?php echo $name ?>" size="30" /><br />

        </div>
        <div class="row">
            <label class="required" for="email">Your email:</label><br />
            <input id="email" class="input" name="email" type="text" value="<?php echo $mail ?>" size="30" /><br />

        </div>
        <div class="row">
            <label class="required" for="message">Your message:</label><br />
            <textarea id="message" class="input" name="message" rows="7" cols="30"><?php echo $msg ?></textarea><br />

        </div>

        <input id="submit" name="submit" type="submit" value="Send email" />
        <input id="clear" name="clear" type="reset" value="clear form" />
    </form>
  </div>

</body>
</html>