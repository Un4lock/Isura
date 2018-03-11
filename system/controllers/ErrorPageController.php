<?php 
class ErrorPage{
	public function __construct(){
  	}

	public function exec($file_name,$param){
    	$file_path = VIEW . "$file_name" . '.php';
	    if(is_file($file_path))
	      	require($file_path);
  	}
}