<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class="container mt-3">
        <h1>Listes Des Produits</h1>
        <div class="row">
            <?php
            for ($i = 0; $i < 9; $i++) {
            ?>
                <div class="col-3">
                    <dvi class="card">
                        <img src="https://fastly.picsum.photos/id/36/200/200.jpg?hmac=VnDu-KXiZmaBJk0XmixLx-JdUPLqVQtLdiqMXOn4LZc" class="img-fluid" alt="La photo du produit">
                        <div class="card-body">
                            <h1 class="card-title">Asus I7 1To</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, architecto.</p>
                            <a href="" class="btn btn-success btn-sm">Detail</a>
                            <a href="" class="btn btn-primary btn-sm">Ajouter</a>
                        </div>
                    </dvi>
                </div>
            <?php } ?>
        </div>
        <hr>
        <h2>service irreprochable</h2>
        <div class="row">
            <div class="col-4">
                <div class="card bg-primary test-white text-center">
                    <div class="card-body">
                        <i class="fas fa-truck fa-3x"></i>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum amet, eveniet at sunt facere molestiae?</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-primary test-white text-center">
                    <div class="card-body">
                        <i class="fas fa-check fa-3x"></i>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum amet, eveniet at sunt facere molestiae?</p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>