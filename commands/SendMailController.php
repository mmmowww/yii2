<?
namespace app\commands;
use app\models\BDSEARCH;
use app\models\Activity;
use app\models\useredit;
use app\models\ActiveRecord;
use yii\console\Controller;
use yii\console\ExitCode;


class SendMailController extends Controller
{
  
    public $V1; // именна тех кому отслыаем.
    public $V2; //Сообщение которое отслыаем
    public function actionIndex()
    {
$activityUser = new Activity();
$resaultUser = $activityUser::find()->asArray()->where('userName = :userName', [':userName' => $sessionUserName])->all(); // Ввыборка по базе текущего пользователя
$resaultEmail=Yii::$app->db->asArray()->createCommand("SELECT DISTINCT userEmail FROM `activity`,`user` WHERE activity.userName = '.$V1.' AND user.userName = '.$V1.'")->execute(); 
// Тут я долго думал как через конструктор сделать этот запрос, так и не придумал.
    

    $email = \Yii::$app->mailer->compose([
    'html' => 'mail\layouts\views\site\sory.php', 
], ['variable' => $V2]
)->setFrom('VashSait@ubejal.ru')
     ->setSubject('regular spam')
     ->setTo($resaultEmail)
     ->setCharset('UTF-8')
     ->send();
echo $this->V1.PHP_EOL;
echo $this->V2.PHP_EOL;
if($email === true){
    echo "Спам был отправлен";
}
        return ExitCode::OK;
    }

    public function options($actionID)
{
    return ['V1', 'V2'];
}

}
