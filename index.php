<?php
    require_once("vendor/autoload.php");

    class HomeController
    {
        public function index()
        {
            echo "Index Page";
        }

        public function create()
        {
            echo "create page";
        }

        public function show()
        {
            echo "show page";
        }

        public function edit()
        {
            echo "edit page";
        }

        public function update()
        {
            echo "update page";
        }
    }

    class TestController
    {
        public function index()
        {
            echo "test index page";
        }
    }

    function notFound() {
        echo "Not Found Page";
    }

    
    // dd($_SERVER);
    // die(var_dump($_SERVER["PATH_INFO"]));
    // dd($_SERVER["PATH_INFO"]);
    
    
    // $home = new Home();
    // $home -> index();
    
    // $variable = "index";
    // $home = new Home();
    // $home -> $variable();


    // // first method 
    // $variable = substr($_SERVER["PATH_INFO"], 1);
    // $home = new Home();
    // $home -> $variable();

    // second method 
    // dd(HomeController::class);
    // dd(TestConroller::class);

    $routes = [
        '/index' => [HomeController::class, "index"],
        '/create' => [HomeController::class, "create"],
        '/show' => [HomeController::class, 'show'],
        '/update' => [HomeController::class, 'update'],
        '/test' => [TestController::class, 'index']
    ];

    $route = $_SERVER["PATH_INFO"];
    // dd($route);
    // $variable = $routes[$route][0];
    // $variable = $routes[$route][1];
    // var_dump($variable);

    if(array_key_exists($route, $routes)) {
        $controller = $routes[$route][0];
        $method = $routes[$route][1];
    } else {
        notFound();
        die();
    }
    
    $home = new $controller();
    $home -> $method();

?>