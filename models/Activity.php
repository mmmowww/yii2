<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Activity extends ActiveRecord {

public static function tableName(){
	return 'activity';
}
/// MySql
/// 
 public $id;	
 public $activity; 	
 public $activityinfo; 	
 public $currentDate; 	
 public $dataStart; 	
 public $dateFinish; 	
 public $userName; 	
 public $bdMount; 	
 public $bdWeek; 	
 public $bdDay; 	
 public $reapit; 	
 public $Block; 	
 public $DayRule; 
/*
 ////////behev
public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time()
            ]
        ];
    }
    public function attributeLabels()
    {	   
        return [
 'id' => $id,
 'activity' => $activity,
 'activityinfo' => $activityinfo ,
 'currentDate' => $currentDate ,
 'dataStart' => $dataStart,
 'dateFinish' => $dateFinish,
 'userName' => $userName,
 'bdMount' => $bdMount,
 'bdWeek' => $bdWeek,
 'bdDay' => $bdDay,
 'reapit' => $reapit,
 'Block' => $block,
 'DayRule' => $DayRule,
];
    
   }
/////////
*/
   public static function findOne($condition){
    if(Yii::$app->cashe->exist(self::tableName().'_'.$condition) === false){
        $result = parent::findOne($condition);
        Yii::$app->cashe->set(self::tableName().'_'.$condition);
        return parent::findOne($condition);
    }else {
        return Yii::$app->cashe->get(self::tableName().'_'.$condition);
    }
    
   }
}
/////////
