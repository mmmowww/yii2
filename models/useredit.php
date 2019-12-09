<?
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class useredit extends ActiveRecord {

public static function tableName(){
	return 'user';
}
/// MySql
/// 
const USER_REGISTERED = "OK!";
 public $id;	
 public $userName; 	
 public $password; 	
 /////////
 
 public $Adid;
 public $AduserName;
 public $Adpassword;
 public $Delid;
 public $DeluserName;
 public $Delpassword;
 public $Editid;
 public $EdituserName;
 public $Editpassword;
 
/////////

 public function behavior(){
		return [
			[
				'class'=>MyBehavior::className()
		    ]
	];
 }

public function userRegistered(){
		$this->trigger(self::USER_REGISTERED);
	}
}