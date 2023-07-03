<?php

require_once('classes/product.php');
require_once('classes/card.php');
require_once('classes/ecommerce.php');
require_once('classes/db.php');

// Creazione dell'oggetto Ecommerce
$ecommerce = new Ecommerce();

// Aggiunta dei prodotti all'ecommerce
foreach ($products as $product) {
    $ecommerce->addProduct($product);
}

// Ottenere tutti i prodotti dell'ecommerce
$products = $ecommerce->getProducts();

// Generazione delle card per i prodotti
foreach ($products as $product) {
    $card = new Card($product);
    $card->render();
}

?>