<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-32">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puy-l'évèque | village médiéval</title>
    <link rel="stylesheet" href="../css/index.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    
    <main>
        <section class="reflet">
            <h2>R<br>e<br>f<br>l<br>e<br>t</h2>
        </section>
        <section class="left">
            <div class="uppertext">
                <h2 class="du_lot">Du lot</h2>
            </div>
            <img class="img" src="../img/1.jpg">
            <div class="a_la_une">
                <h3 class="sous-titre">A la une</h3>
                <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                Duis ultrices imperdiet consequat.<br> 
                Suspendisse mattis scelerisque felis, vel fringilla nisi aliquet eu.<br>
                Nam elementum tempor ipsum id condimentum.<br>
                </p>
            </div>
        </section>
        <section class="right">
            <div class="calendrier">

            </div>
            <div class="actualités">
                <p class="actu_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                Duis ultrices imperdiet consequat.<br> 
                
                </p>
                <img class="img" src="../img/village.jpg">
            </div>
            <div class="actualités">
                <p class="actu_text">
                
                Suspendisse mattis scelerisque felis, vel fringilla nisi aliquet eu.<br>
                Nam elementum tempor ipsum id condimentum.<br> 
                </p>
                <img class="img" src="../img/village.jpg">
            </div>
            <div class="actualités">
                <p class="actu_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                Duis ultrices imperdiet consequat.<br> 
                
                </p>
                <img class="img" src="../img/village.jpg">
            </div>
        </section>
    </main>
</body>


</html>