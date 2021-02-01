<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php 
            include 'main.php';
            foreach($hotels as $hotel) { ?>
                <h1><?php echo $hotel["name"]?></h1>
                <p><?php echo "<b>Description:</b> " .  $hotel["description"]?></p>
                <p><?php echo "<b>Parking:</b> " . $hotel["parking"]?></p>
                <p><?php echo "<b>Vote:</b> " . $hotel["vote"]?></p>
                <p><?php echo "<b>Distance to center:</b> " . $hotel["distance_to_center"]?></p>
            <?php
            }
        ?>
    </body>
</html>