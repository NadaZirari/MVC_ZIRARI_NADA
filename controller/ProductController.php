<?php
require_once "model/Product.php";

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function displayProducts() {
        $products = $this->productModel->getProducts();
        require "view/product_list.php";
    }

    public function addProduct($name, $price, $description) {
        $this->productModel->addProduct($name, $price, $description);
        $this->displayProducts();
    }

    public function deleteProduct($id) {
        $this->productModel->deleteProduct($id);
        $this->displayProducts();
    }
}
?>
