<?php 

    // Vamos iniciar o uso de sessões:
    session_start();

    require_once("vendor/autoload.php");

    // Use de cada classe:

    use \Slim\Slim; // Framework
    use \Hcode\Page; // Main site page

    $app = new Slim();

    $app->config('debug', true); // Show me the bug

    $app->get('/', function() // Acces by get. Route: Main site
    {

        $page = new Page(); // Creating page

        $page->setTpl("index");

    });

    $app->post('/viacep-javascript/cep', function() // Acces by get. Route: Main site
    {

        $page = new Page(); // Creating page

        $page->setTpl("cep");

    });

    $app->run();

?>