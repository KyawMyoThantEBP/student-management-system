<?php
    require_once("vendor/autoload.php");
    use App\Ultis\Database;
    use Symfony\Component\HttpFoundation\Request;

    $db = new Database();
    $request = Request::createFromGlobals();

    // $student = $db -> update($_POST);
    $student = $db -> update($request->request->all());
?>