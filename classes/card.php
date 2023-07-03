<?php
class Card {
    private $product;

    public function __construct($product) {
        $this->product = $product;
    }

    public function render() {
        echo '<div class="card">';
        echo '<img src="' . $this->product->getImage() . '" alt="' . $this->product->getTitle() . '">';
        echo '<h2>' . $this->product->getTitle() . '</h2>';
        echo '<p>Price: $' . $this->product->getPrice() . '</p>';
        echo '<p>Category: ' . $this->product->getCategory() . '</p>';
        echo '<p>Type: ' . $this->product->getType() . '</p>';
        echo '</div>';
    }
}
