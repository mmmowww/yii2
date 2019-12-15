


<?php

namespace app\models;

use yii\db\ActiveRecord;

class Day extends Models {
	

	
	public function actionDay($id){
		return $this->render('day');
	}
}

