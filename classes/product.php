<?php 
class Product {
    private $id;
    private $title;
    private $price;
    private $category;
    private $type;
    private $image;

    public function __construct($id, $title, $price, $category, $type, $image) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->image = $image;
    }

    // Getter e setter per le proprietà

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }
}