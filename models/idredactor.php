<?php 
namespace app\models;
use Yii;
use yii\base\Model;





class idredactor extends Model{ 

public $idActivity;
public $ActivityInfo;
public $date;
public $ip;

public function rules()
    {
        return [
            

            
            [['idActivity', 'ActivityInfo', 'date', 'ip'], 'required'],
            
            
            
            ['verifyCode', 'captcha'],
        ];
    }
}


?>