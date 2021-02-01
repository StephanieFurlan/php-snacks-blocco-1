<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio: -->

<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php foreach($posts as $date => $post) { ?>
         <h1><?php echo $date ?></h1>
         <?php foreach($post as $p) { ?>
            <ul>
               <?php foreach ($p as $key => $value) { ?>
                  <li>
                     <b><?php echo $key ?></b>
                     <span><?php echo $value ?></span>
                  </li>
               <?php } ?>
            </ul>
         <?php } ?>
      <?php } ?>


   </body>
</html>
