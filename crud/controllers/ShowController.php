<?php
class ShowController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $result = [];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['item_id'])) {
            $item_id = $_GET['item_id'];
            $result = $this->model->getItemsByItemId($item_id);
        }
        require 'views/show.php';
    }
}
