<?php

namespace app\controllers;

use yii\web\Controller;
use yii\db\ActiveRecord;
use yii\data\Pagination;
use app\models\Activity;

class MyСalendar extends Controler{
	
public function actionGetMyCalendar(){

    $data = array();
    ////
    $DATE = new app\models\Activity;
    
	return $this->render('calendar',
        'DATE' => $DATE
        );
}


}




