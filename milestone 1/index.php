<?php

    require __DIR__ . '/database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>"> 
    <title>Vue dischi PHP</title>
</head>
<body>
    <header>
        <div class="contenitore-header">
            <img src="./img/spoty-logo.png" alt="img">
        </div>
    </header>

    <main>
        <div class="contenitore-main">
        <?php foreach($database as $single_disk){ ?>
               <div class="single-disk">
                    <div class="image">
                        <img src="<?php echo $single_disk['poster']?>" alt="">
                    </div>
                    <div class="titolo">
                        <h4><?php echo $single_disk['title'] ?></h4>
                    </div>
                    <div class="autore">
                        <h5><?php echo $single_disk['author']?></h5>
                        <h5><?php echo $single_disk['year']?></h5>

                    </div>
               </div>
       <?php }?>  
           
        </div>
    </main>
</body>
</html>