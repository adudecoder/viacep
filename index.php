<?php

    require_once("vendor/autoload.php");

    use \Slim\Slim;
    use \App\Page;

    $app = new Slim();

    $app -> config('debug', true);

    $app -> get('/', function() {

        $page = new Page();

        $page -> setTpl("index");

        // $sql = new App\DB\Sql();
        // $results = $sql -> select("SELECT * FROM tb_users");
        // echo json_encode($results);

    });

    $app -> get('/cep', function() {

        $page = new Page();

        $page -> setTpl("cep");

    });

    $app -> run();

?>