<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      $messaggio = "Ciao Mondo mi chiamo:";
      $name = $_GET["name"];
      $msgmail = "la mia mail è :";
      $mail = $_GET["mail"];
      $msg = "ed ho:";
      $age = $_GET["age"];
      ?>

  </head>

  <body>

 <h1> Hello World</h1>
 <h3>
   <?php

    echo $messaggio ." ". $name ."<br>". $msgmail . $mail ."<br>". $msg. " " . $age ." ". "anni";

    ?> </h3>
  </body>
</html>
