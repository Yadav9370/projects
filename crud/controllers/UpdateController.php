<?php
class UpdateController {
    private $updateModel;

    public function __construct($updateModel) {
        $this->updateModel = $updateModel;
    }

    public function index() {
        require 'views/update.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item_id = $_POST['item_id'];
            $item_name = $_POST['item_name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];

            if ($this->updateModel->updateItem($item_id, $item_name, $quantity, $price)) {
                header("Location: /home");
                exit;
            } else {
                echo "Failed to update item.";
            }
        }
    }
}
