<?php
    require_once("vendor/autoload.php");
    $db = new DB();
    $student = $db -> delete($_GET["id"]);
?>
