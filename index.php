<?php
session_start();
require 'inc/head.php';

// ici , $_GET['remove_to_cart'] et $_GET['add_to_cart'] on la même valeur car ?add_to_cart=Pecan nuts et ?remove_to_cart=Pecan nuts
if (isset($_GET['add_to_cart'])) {
    if (!isset($_SESSION['panier'][$_GET['add_to_cart']])){
        $_SESSION['panier'][$_GET['add_to_cart']] = ['quantité' => 1];
    }else{
        $_SESSION['panier'][$_GET['add_to_cart']]['quantité'] += 1;
    }
}elseif (isset($_GET['remove_to_cart']) && ($_SESSION['panier'][$_GET['remove_to_cart']]['quantité'] > 0) ){
    $_SESSION['panier'][$_GET['remove_to_cart']]['quantité'] -= 1;
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add_to_cart=Pecan nuts" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove_to_cart=Pecan nuts" class="btn btn-primary removeButton">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Remove to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="?add_to_cart=Chocolate chips" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a href="?remove_to_cart=Chocolate chips" class="btn btn-primary removeButton">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Remove to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add_to_cart=Chocolate cookie" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove_to_cart=Chocolate cookie" class="btn btn-primary removeButton">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Remove to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add_to_cart=MMS cookies" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove_to_cart=MMS cookies" class="btn btn-primary removeButton">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Remove to cart
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>

    <?php

    if (isset($_GET['add_to_cart']) || isset($_GET['remove_to_cart'])  ){
        foreach ($_SESSION['panier'] as $cookie => $quantite)
        {if ($_SESSION['panier'][$cookie]['quantité'] > 0){
            echo $cookie . ' : ' . $_SESSION['panier'][$cookie]['quantité'] . '</br>';
        }}} ?>

</section>

<?php require 'inc/foot.php'; ?>
