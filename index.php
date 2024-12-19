<?php
require_once "controller/ProductController.php";

$controller = new ProductController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action === "add" && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $controller->addProduct($name, $price, $description);
    } elseif ($action === "delete" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller->deleteProduct($id);
    } else {
        $controller->displayProducts();
    }
} else {
    $controller->displayProducts();
}
?>
