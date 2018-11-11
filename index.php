<?php
require_once ("vendor/autoload.php");
$app = new \Slim\Slim();
$app->config('debug', true);
$app->get('/', function (){
    $sql = new Loja\DB\Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    var_dump($results);
});
$app->run();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOJA VIRTUAL</title>
</head>
<body>
<h1>OLA MUNDO...Ola Brasil</h1>
</body>
</html>
