<?php
require('../public/data/shoes.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>

<body class="bg-dark">
    <header>
        <h1 class="text-center py-5 text-white">Shoes LHP8</h1>
        <nav class="mx-5">
            <div class="d-flex justify-content-evenly">
                <a class="btn btn-lg text-white" href="">Hommes <i class="bi bi-list"></i></a>
                <a class="btn btn-lg text-white" href="">Femmes <i class="bi bi-list"></i></a>
                <a class="btn btn-lg text-white" href="">Enfants <i class="bi bi-list"></i></a>
                <a class="btn btn-lg text-white" href=""><i class="bi bi-cart2"></i></a>
                <a class="btn btn-lg text-white" href=""><i class="bi bi-person-circle"></i></a>
            </div>
        </nav>
    </header>
    <div class="container bg-white my-5 py-5 d-flex flex-wrap justify-content-evenly rounded">
        <?php
        foreach ($array as $key => $shoes) { ?>
            <div class="card my-3 cards shadow">
                <div class="img">
                    <img src="../public/img/<?= $shoes['picture'] ?>.webp" class="card-img-top" alt="<?= $shoes['name'] ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $shoes['name'] ?></h5>
                    <p class="card-text">Marque : <?= $shoes['brand'] ?></p>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">Taille : <?= $shoes['size'] ?></p>
                        <p class="card-text">Couleur : <?= $shoes['color'] ?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-dark">Acheter</a>
                        <p>Prix : <?= $shoes['price'] ?> €</p>
                    </div>
                </div>
            </div>
        <?php } ?>


    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Hommes</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Femmes</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2">Enfants</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2"><i class="bi bi-cart2"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white px-2"><i class="bi bi-person-circle"></i></a></li>
        </ul>
        <p class="text-center text-white">© 2022 LHP8, Inc</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>