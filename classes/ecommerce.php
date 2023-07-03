<?php
class Ecommerce {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getProductsByCategory($category) {
        $filteredProducts = [];
        foreach ($this->products as $product) {
            if ($product->getCategory() === $category) {
                $filteredProducts[] = $product;
            }
        }
        return $filteredProducts;
    }
}