<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
	public function index()
	{
		echo "halo dunia tipu-tipu";
		//return view('welcome_message');
	}
	public function foo($param,$num,$detail="-"){
		echo "hallo foo";
		echo "<br/>param : $param";
		echo "<br/>num : $num";
		echo "<br/>$detail";
	}
	public function fromRoutes(){
		echo "from routes";
	}
	public function withNumber($num){
		echo "with number : $num";
	}
}
