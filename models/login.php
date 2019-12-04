<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use frontend\models\BDSEARCH;

class login extends ActiveRecord{
	public $userName;
	public $userPassword;
    public $userEmail;
  public function rules(){
  	return [['userName','userPassword'],'requid'];
  }
public static function tableName(){
	return 'accountuser';
}

}
