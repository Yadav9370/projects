<?php
class Deletes {
    private $conn;
    private $table = "inventory";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function deleteItem($item_id) {
        $sql = "DELETE FROM " . $this->table . " WHERE item_id = :item_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':item_id', $item_id);

        return $stmt->execute();
    }
}
