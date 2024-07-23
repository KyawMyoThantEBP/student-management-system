<?php
    require_once("vendor/autoload.php");
    use App\Ultis\Database;
    use Symfony\Component\HttpFoundation\Request;

    $db = new Database();
    $request = Request::createFromGlobals();
    // $student = $db -> delete($_GET["id"]);
    $student = $db -> delete($request->query->get('id'));
?>
