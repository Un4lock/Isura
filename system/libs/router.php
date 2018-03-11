<?php 
class Router {
	public $url;
	public $page;
	public $method;
	public $param;
	public function __construct(){
		$this->setUrl();
		$this->setPage();
		$this->setMethod();
	}
	public function setUrl(){
		$this->url = explode("/",URL);
	}
	public function setPage(){
		$this->page = $this->url[1+LEVEL] === '' ? DEFAULT_PAGE : $this->url[1+LEVEL];
	}
	public function setMethod(){
		$this->method =  empty($this->url[2+LEVEL]) ? 'exec' : $this->url[2+LEVEL];
	}
	public function setParam(){
		if(REQUEST_METHOD === 'POST')
			$this->param = $_POST;
		else if (REQUEST_METHOD === 'GET')
			$this->param = '';
	}
	public function getUrl(){
		return $this->url;
	}
	public function getPage(){
		return $this->page;
	}
	public function getMethod(){
		return $this->method;
	}
	public function getParam(){
		return $this->param;
	}
}