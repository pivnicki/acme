<?php

namespace Acme\Controllers;
 
 
use Acme\Models\User;
use Acme\Validation\Validator;
//problem je bio u tome sto mi je u
// User.php pisalo namespace Acme\Model umesto namespace Acme\Models


class RegisterController extends BaseController{

	public function getShowRegisterPage(){
		//include(__DIR__."/../../views/register.html");
		echo $this->twig->render('register.html');
	}

	public function postShowRegisterPage(){
		$errors=[];

		$validation_data=[
		"first_name"=>"min:3",
		"last_name"=>"min:3",
		"email"=>"email|equalTo:verify_email",
		"verify_email"=>"email",
		"password"=>"min:3|equalTo:verify_password",
		 
		];

 		$validator=new Validator();
 		$errors=$validator->isValid($validation_data);

 	//  	print_r($errors);
		// exit();

		if(sizeof($errors)>0){
			// $_SESSION['msg']=$errors;
			// header("Location:register");
			echo $this->twig->render('register.html',['errors'=>$errors]);
			exit();
		}

		$user=new User;
		$user->first_name=$_REQUEST['first_name'];
		$user->last_name=$_REQUEST['last_name'];
		$user->email=$_REQUEST['email'];
		$user->password=password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
		$user->save();
		echo "Registered";
	}

	public function getShowLoginPage(){
		//include(__DIR__."/../../views/login.html");
		echo $this->twig->render('login.html');
	}

	 
}