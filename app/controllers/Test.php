<?php
namespace controllers;
 /**
 * Controller Test
 **/
class Test extends ControllerBase{

	public function index(){
		
	}

	public function message($param="Hello"){
		echo $param;
	}

}
