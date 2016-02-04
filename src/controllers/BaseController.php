<?php

namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;
 
//problem je bio u tome sto mi je u
// User.php pisalo namespace Acme\Model umesto namespace Acme\Models
class BaseController{

	protected $loader;
	protected $twig;

	public function __construct(){
		$this->loader=new \Twig_Loader_Filesystem(__DIR__."/../../views");
		$this->twig=new \Twig_Environment(
			$this->loader,[
			'cache'=>"/cache/views",'debug'=>true
			]
			);
	}

	// protected $blade;

	// public function __construct(){
	// 	$this->blade = new BladeInstance("views","cache/views");
	// }

}