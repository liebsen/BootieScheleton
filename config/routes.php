<?php 

use \Bootie\App as App;

/* public */
App::route('/',			['uses' => 'Controller\HomeController@index']);
/* public pages */
App::route('/(.*)', [ 'uses' => 'Controller\HomeController@page']);
