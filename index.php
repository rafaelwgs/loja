<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config("debug", TRUE);

$app->get("/", function() {

	$sql = new Hcode\DB\Sql();

	$response = $sql->select("select * from tb_products");

	echo '<pre>';
	print_r($response);
	
});

$app->run();

