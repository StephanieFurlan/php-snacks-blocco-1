<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->




<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Check</title>
   </head>
   <body>
      <form action="response.php" method="get">
         <label for="name">Name:</label>
         <input type="text" name="name">
         <label for="mail">E-mail:</label>
         <input type="text" name="mail">
         <label for="age">Age:</label>
         <input type="number" name="age">
         <input type="submit" name="submit" />
      </form>
   </body>
</html>
