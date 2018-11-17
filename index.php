<?php
require_once ("vendor/autoload.php");

use \Slim\Slim;
use \Vognec\Page;
use \Vognec\PageAdmin;
use \Vognec\Model\User;

$app = new Slim();
$app->config('debug', true);
$app->get('/', function (){
$page = new Page();

$page->setTpl("index");
});

$app->get('/admin', function (){
    $page = new PageAdmin();

    $page->setTpl("WordPindex");''
});


$app->get('/admin/login', function (){
    $page = new PageAdmin([
        "header" => false,
        "footer" => false
    ]);

    $page->setTpl("login");
});

$app->post('/admin/login', function (){
    User::login($_POST["login"],$_POST["senha"]);
    header("Location: /admin");
    exit;
});

$app->run();
?>
