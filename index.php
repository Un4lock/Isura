<?php 
require 'system/config.php';
require LIBRARY.'import.php';

import::package('router');
import::package('security');

$rout = new Router();

$page = $rout->page;
$method = $rout->method;
$param = $rout->param;

if(!security::validateController($page))
  $page = 'ErrorPage';

require CONTROLLERS . "/{$page}Controller.php";

if(!security::validateMethod($page, $method))
  $method = 'exec';

$controller = new $page;

$controller->$method($page,$param);
