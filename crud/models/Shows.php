<?php
class Shows {
    private $conn;
    private $table = "inventory";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getItemsByItemId($item_id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE item_id = :item_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':item_id', $item_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
