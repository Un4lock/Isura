<?php 

// Identificador si se esta trabajando en virtual o en host
if($_SERVER['SERVER_NAME'] =="localhost"){
	define('SERVER',"/ftp/");
	define('LEVEL', 1);
}else{
	define('SERVER',"");
	define('LEVEL', 0);
}
// Variable que define la IP
define('IP', $_SERVER['REMOTE_ADDR']);
// Constante para obtener la URL de la pagina
define('URL', $_SERVER['REQUEST_URI']);
// Constante de la ruta de la pagiana
define('ROOT', $_SERVER['DOCUMENT_ROOT'].SERVER);
// Constante que definira el metodo
define('METHOD', $_SERVER['REQUEST_METHOD']);
// Contenedor de librerias
define('LIBRARY', ROOT."/system/libs/");
// Contendedor de vistas
define('VIEW',ROOT."/system/views/" );
// Contenedor de controladores
define('CONTROLLERS', ROOT."/system/controllers/");
// Pagina de inicio
define('DEFAULT_PAGE', "home");

