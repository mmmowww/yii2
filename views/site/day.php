<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\web\JsExpression;
use yii\helpers\Url;
use edofre\fullcalendar\models\Event;

$thisday = 12;
// $thisday будет генерироваться при каждом нажатии
$this->title = 'this day'.$thisday;

?>

<?= edofre\fullcalendar\Fullcalendar::widget([
        'options'       => [
            'id'       => 'calendar',
            'language' => 'nl',
        ],
        'clientOptions' => [
            'weekNumbers' => true,
            'selectable'  => true,
            'defaultView' => 'agendaWeek',
            'eventResize' => new JsExpression("
                function(event, delta, revertFunc, jsEvent, ui, view) {
                    console.log(event);
                }
            "),

        ],
        'events'=> Url::to(['calendar/events', 'id' => $uniqid]),
    ]);
?>
<?php

 foreach($Activity as $Calendar) {

   




$MyEvent = new Event;
$MyEvent->id = $Calendar['id'];
$MyEvent->title = $Calendar['activity'];
$MyEvent->allDay=$Calendar['currentDate'];
$MyEvent->start = $Calendar['dataStart'];
$MyEvent->end= $Calendar['dataFinish'];
echo '<h4>День</h4>';
echo $MyEvent->id;
echo '</br>';
echo $MyEvent->title;
echo '</br>';
echo $MyEvent->allDay;
echo '<br>';
echo $MyEvent->start;
echo '<br>';
echo $MyEvent->end;

   
        echo '<br>';
        
   };
?>

<a href = "http://yii2/index.php?r=site/redactor">Редактор</a>
<a href = "http://yii2/index.php?r=site/calendar">Вернуться в календарь</a>