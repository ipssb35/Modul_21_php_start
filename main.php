<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title><?= $title; ?></title>
</head>
<body>

    <?php include 'header.inc.php'; ?>

    <content class="content">
        <div class="content__wrapper">
            
            <h2><?= $welcome; ?></h2>

            <div class="about">

                <div class="image">
                    <?= '<img src="./img/vanya.jpg" class="image" />'; ?>
                </div>

                <div class="about__me">
                    <h3><?= "$firstname $lastname"; ?></h3>
                    <p><?= "$data, $city"; ?></p>
                    <p>
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                     Ea a magni pariatur repudiandae cumque, quam neque doloribus recusandae reprehenderit nesciunt quas ipsa consequatur architecto quis modi doloremque delectus odio! Voluptate!
                    </p>
                    <div class="knowledge">
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                    <?php
                        echo $d ;
                    ?> 
                    <br>
                    <?php
                            echo "\$x = $x <br /> \$y = $y <br />";
                            echo "\$z = \$x + \$y = $z <br /><br />";

                    ?>
                    </div>
                </div>

            </div>

        </div>
    </content>

    <?php include 'footer.inc.php'; ?>
    
</body>
</html>
