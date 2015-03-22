<?php
error_reporting(-1);
ini_set("display_errors",1);

require_once("../vendor/autoload.php");


use Mpwarfw\Utils\Request;
use Mpwarfw\Utils\Session;
use Mpwarfw\Component\Bootstrap;

echo "Estoy en modo dev \n";
$bootstrap = new Bootstrap('dev', new Request(new Session()));
$response = $bootstrap->execute();
$response->send();



