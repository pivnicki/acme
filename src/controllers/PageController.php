<?php

namespace Acme\Controllers;
 
 
 
//problem je bio u tome sto mi je u
// User.php pisalo namespace Acme\Model umesto namespace Acme\Models


class PageController extends BaseController{

 

	public function getShowHomePage(){
		//include(__DIR__."/../../views/home.php");
		echo $this->twig->render('home.html');
		//echo $this->blade->render("home");
	}

 
}