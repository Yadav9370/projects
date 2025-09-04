<?php
class Inserts {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addItem($item_id, $item_name, $quantity, $price, $description) {
        $stmt = $this->conn->prepare("INSERT INTO inventory (item_id, item_name, quantity, price, description) VALUES (:item_id, :item_name, :quantity, :price, :description)");
        $stmt->bindParam(':item_id', $item_id);
        $stmt->bindParam(':item_name', $item_name);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }
}
