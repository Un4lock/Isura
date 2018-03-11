<?php 

class Security {
	public static function validateController($page){
	    if(!is_file(CONTROLLERS .$page."Controller.php"))
	    	return false;
	    return true;
  	}

  	public static function validateMethod($page, $method){
	    if(!method_exists($page, $method))
	      return false;
	    return true;
  	}	
}