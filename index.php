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
                <?php var_dump($single_disk);?>
            <?php}?>  

            <div class="single-disk">
                <div class="image">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" alt="prova">
                </div>
                <div class="contenuti">
                        <h4>Prova</h4>
                </div>
            </div>
        </div>
    </main>
</body>
</html>