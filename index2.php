<!-- Passare come parametri GET name, mail e age e verificare (cercando i
metodi che non conosciamo nella documentazione) che name sia più
lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che
age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->

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
      $atFinder = strpos($mail , "@");
      $dotFinder = strpos($mail , ".")
      ?>

  </head>

  <body>

 <h1> Hello World</h1>
 <h3>
   <?php

    echo $messaggio ." ". $name ."<br>". $msgmail . $mail ."<br>". $msg. " " . $age ." ". "anni" ."<br>";

    if (strlen($name) > 3 && is_numeric($age) && $atFinder && $dotFinder) {
      echo "Accesso riuscito";
    } else {
      echo "Accesso negato";
    }
    ?> </h3>
  </body>
</html>
