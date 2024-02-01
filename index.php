<?php 
require_once __DIR__ . '/bootstrap.php';
$json_string  = file_get_contents('./cv.json');
$array_php = json_decode($json_string, true);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
  </head>
  <body>
    <div class="contenedor mt-5 py-4">
        <div class="d-flex justify-content-between">
            <div class="descripcion">
                <h1><?= $array_php['basics']['name'] ?></h1>
                <h3 class="puesto-header"><?= $array_php['basics']['label'] ?></h3>
                <div class="d-flex align-items-center gap-2">
                    <img src="./assets/logo/world.svg" width="20px" alt="">
                    <p>Lima, Perú</p>
                </div>
                <div class="contactos mt-3 d-flex gap-3">
                    <a title="Envíame un correo a <?= $array_php['basics']['email'] ?>" href="mailto:<?= $array_php['basics']['email'] ?>"><img class="contacto__logo" src="./assets/logo/at.svg" width="20px" alt=""></a>
                    <a title="Llamame al número <?= $array_php['basics']['phone'] ?>" href="tel:<?= $array_php['basics']['phone'] ?>"><img class="contacto__logo" src="./assets/logo/phone-flip.svg" width="20px" alt=""></a>
                    <a target="_blank" href="<?= $array_php['basics']['profiles'][1]['url'] ?>"><img class="contacto__logo" src="./assets/logo/linkedin.png" width="20px" alt=""></a>
                    <a target="_blank" href="<?= $array_php['basics']['profiles'][0]['url'] ?>"><img class="contacto__logo" src="./assets/logo/twitter.png" width="20px" alt=""></a>
                    <a target="_blank" href="<?= $array_php['basics']['profiles'][2]['url'] ?>"><img class="contacto__logo" src="./assets/logo/github.png" width="20px" alt=""></a>
                </div>
            </div>
            <div>
                <img class="miFoto" src="<?= $array_php['basics']['image'] ?>" alt="">
            </div>
        </div>
        <div class="mt-5">
            <h2>Sobre mí</h2>
            <p><?= $array_php['basics']['summary'] ?></p>
        </div>
        <div class="mt-5">
            <h2>Experiencia laboral</h2>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?= $array_php['work'][0]['url'] ?>"><h4><?= $array_php['work'][0]['name'] ?></h4></a>
                    <h5><?= $array_php['work'][0]['position'] ?></h5>
                </div>
                <h5><?= $array_php['work'][0]['startDate'] ."  -  ".$array_php['work'][0]['endDate'] ?></h5>
            </div>
            <p class="mt-3"><?=$array_php['work'][0]['summary'] ?></p>
        </div>
        <div class="mt-5">
            <h2>Educación</h2>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?= $array_php['education'][0]['url'] ?>"><h4><?= $array_php['education'][0]['institution'] ?></h4></a>
                    <h5><?= $array_php['education'][0]['area'] ?></h5>
                </div>
                <h5><?= $array_php['education'][0]['startDate'] ."  -  ".$array_php['education'][0]['endDate'] ?></h5>
            </div>
        </div>
        <div class="mt-5">
            <h2>Skills</h2>
            <?php foreach($array_php['skills'][0]["keywords"] as $value){ ?>
                <span class="tag"><?= $value ?></span>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>