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



} 

