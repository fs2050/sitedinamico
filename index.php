<?php
// put your code here
ob_start();


define('F5A1B2', true);
require './vendor/autoload.php';
$url = new Core\ConfigController();
$url->carregar();

