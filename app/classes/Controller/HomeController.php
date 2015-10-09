<?php namespace Controller;

class HomeController {
	
	static $layout = "default";
	
	public function index(){
		return \Bootie\App::view('system.hello');
	}

	public function page($page){
		return \Bootie\App::view($page);
	}
}