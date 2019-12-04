<?php 
namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Registration extends ActiveRecord{

	public $userName;
	public $userPassword;
    public $userEmail;
  
public static function tableName(){
	return 'accountuser';
}

}

