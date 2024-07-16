<?php
    require_once("vendor/autoload.php");
    use App\Ultis\Database;
    $db = new Database();
    $student = $db -> store($_POST);

?>