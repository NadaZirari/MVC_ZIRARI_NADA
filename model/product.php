<?php
class Product {
    private $products = [];

    public function __construct() {
        // Exemple de données initiales
        $this->products = [
            ["id" => 1, "name" => "Produit 1", "price" => 100, "description" => "Description du produit 1"],
            ["id" => 2, "name" => "Produit 2", "price" => 200, "description" => "Description du produit 2"]
        ];
    }

    public function getProducts() {
        return $this->products;
    }

    public function addProduct($name, $price, $description) {
        $newId = count($this->products) + 1;
        $this->products[] = ["id" => $newId, "name" => $name, "price" => $price, "description" => $description];
    }

    public function deleteProduct($id) {
        $this->products = array_filter($this->products, function($product) use ($id) {
            return $product["id"] != $id;
        });
    }
}
?>
