<?php
class DeleteController {
    private $deleteModel;

    public function __construct($deleteModel) {
        $this->deleteModel = $deleteModel;
    }

    public function index() {
        require 'views/delete.php';
    }

    public function destroy() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item_id = $_POST['item_id'];

            if ($this->deleteModel->deleteItem($item_id)) {
                header('Location: /home');
                exit;
            } else {
                echo "Failed to delete item.";
            }
        }
    }
}
