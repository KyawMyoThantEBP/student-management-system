<?php
    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", "root", "kmt");
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $pdo -> query("
             DELETE FROM students WHERE id =".$_GET['id']);
             
             
             header("location:index.php");
             
    } catch(PDOException $e) {
        die($e->getMessage());
    } catch(Exception $e) {
        echo $e -> getMessage();
    }