<?php
class InsertController {
    private $insertModel;

    public function __construct($insertModel) {
        $this->insertModel = $insertModel;
    }

    public function index() {
        require 'views/insert.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item_id = $_POST['item_id'];
            $item_name = $_POST['item_name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            if ($this->insertModel->addItem($item_id, $item_name, $quantity, $price, $description)) {
                header('Location: /home');
                exit;
            } else {
                echo "Error inserting data.";
            }
        }
    }
}
