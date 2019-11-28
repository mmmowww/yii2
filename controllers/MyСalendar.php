<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\db\ActiveRecord;
use yii\data\Pagination;
use app\models\Activity;
use yii\web\Response;

////////////////









class MyСalendar extends Controler{
	
public function actionMycalendar(){


    $data = array();
    ////
    $DATE = new app\models\Activity;
    
	return $this->render('hi');
		//,['DATE' => $DATE]
       // );
}


}




