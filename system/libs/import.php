<?php 

class Import {
	public static function log($alert){
		echo "<script>console.log('".$alert."')</script>";
	}
	public static function package($module){
		if(!is_file(LIBRARY."{$module}.php"))
			return import::log("Libreria ".$module." no encontrada");
		require LIBRARY.$module.".php";
	}	
}