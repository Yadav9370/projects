<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'models/User.php';
require 'models/Logins.php';
require 'models/Inserts.php';
require 'models/Updates.php';
require 'models/Deletes.php';
require 'models/Shows.php';

require 'controllers/RegisterController.php';
require 'controllers/LoginController.php';
require 'controllers/InsertController.php';
require 'controllers/UpdateController.php';
require 'controllers/DeleteController.php';
require 'controllers/ShowController.php';

$db = new PDO("mysql:host=localhost;dbname=testdb", "root", "asdfghjkl");

$user = new User($db);
$logins = new Logins($db);
$insert = new Inserts($db);
$update = new Updates($db);
$delete = new Deletes($db);
$show = new Shows($db);

$registerController = new RegisterController($user);
$loginController = new LoginController($logins);
$insertController = new InsertController($insert);
$updateController = new UpdateController($update);
$deleteController = new DeleteController($delete);
$showController = new ShowController($show);

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($uri === 'register' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $registerController->store();
} elseif ($uri === 'register') {
    $registerController->index();

} elseif ($uri === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginController->check();
} elseif ($uri === 'login') {
    $loginController->index();

} elseif ($uri === 'home') {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }
    require 'views/home.php';

} elseif ($uri === 'logout') {
    require 'logout.php';

} elseif ($uri === 'welcome') {
    require 'views/welcome.php';

} elseif ($uri === 'insert' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $insertController->store();
} elseif ($uri === 'insert') {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }
    $insertController->index();

} elseif ($uri === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateController->store();
} elseif ($uri === 'update') {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }
    $updateController->index();

} elseif ($uri === 'delete' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteController->destroy();
} elseif ($uri === 'delete') {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }
    $deleteController->index();

} elseif ($uri === 'show') {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /login');
        exit;
    }
    $showController->index();

} else {
    header('Location: /login');
    exit;
}
