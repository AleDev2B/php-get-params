<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      $name = $_GET["name"];
      $messaggio = "Ciao Mondo mi chiamo:";
      $msg = "ed ho";
      $age = $_GET["age"];
      ?>

  </head>

  <body>

 <h1> Hello World</h1>
 <h3>
   <?php

    echo $messaggio ." ". $name ." ". $msg. " " . $age ." ". "anni";

    ?> </h3>
  </body>
</html>
