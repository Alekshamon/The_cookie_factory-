<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php';
session_start();?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $cookie) {
                echo '<div class="col-xs-12"><p>'.$cookie['name'].'</p></div>';
                echo '<div class="col-xs-12"><p>'.$cookie['description'].'</p></div>';
                echo '<div class="col-xs-12"><p>'.$cookie['price'].'</p></div>';

            }
        } else {
            echo '<div class="col-xs-12"><p>Votre panier est vide</p></div>';
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
