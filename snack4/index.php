<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
   [
      "nome" => "Simone",
      "cognome" => "Giuliani",
      "voti" => [10, 8, 9, 10, 7, 6]
   ],
   [
      "nome" => "Emy",
      "cognome" => "Terr",
      "voti" => [6, 8, 9, 4, 7, 9]
   ],
   [
      "nome" => "Sandy",
      "cognome" => "Marshal",
      "voti" => [4,5,8,2,10]
   ]
];



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php foreach($students as $student) { ?>
         <ul>
            <li><?php echo "Name: " . $student["nome"] ?></li>
            <li><?php echo "Cognome: " . $student["cognome"] ?></li>
            <li><?php echo "Media: " . array_sum($student["voti"]); ?></li>
         </ul>
      <?php } ?>


   </body>
</html>
