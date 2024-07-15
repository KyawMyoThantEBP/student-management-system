<?php
    require_once("db.php");
    $db = new DB();
    $student = $db -> delete($_GET["id"]);
?>
