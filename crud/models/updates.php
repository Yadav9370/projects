<?php
class Updates {
    private $conn;
    private $table = "inventory";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function updateItem($item_id, $name, $quantity, $price) {
        $sql = "UPDATE " . $this->table . " 
                SET item_name = :item_name, quantity = :quantity, price = :price
                WHERE item_id = :item_id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':item_id', $item_id);
        $stmt->bindParam(':item_name', $name);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':price', $price);

        return $stmt->execute();
    }
}
