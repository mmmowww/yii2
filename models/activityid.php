<?php
namespace app\models;

use Yii;
use yii\base\Model;

class activityid extends \yii\base\Model {


public function actionRedactor(){
	return $this->render('redactor');   
}

} 