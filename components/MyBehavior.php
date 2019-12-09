<?php

namespace app\components;
user yii\base\Behavior;

class MyBehavior extends Behavior {
	public $id;
	public $user;
	public $password;
	//////
	public $update;
	public $create;
	///// 
	/// При активацыии поля заполняються

	
	}
	public function events(){
		return [
           useredit::USER_REGISTERED => 'Registered'
		];
	}
	
	public function Registered(){
		return 'All ok!';
	}
}