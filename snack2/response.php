<?php
   $name = $_GET["name"];
   $mail = $_GET["mail"];
   $age = $_GET["age"];
   $res = "Accesso negato";
   if ( strlen($name) > 2 && strpos($mail, ".") && strpos($mail, "@") && filter_var($age, FILTER_VALIDATE_INT)) {
      $res = "Accesso riuscito";
   }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Access</title>
   </head>
   <body>
      <h1><?php echo $res ?></h1>
   </body>
</html>
