<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;
use yii\helpers\Url;
use edofre\fullcalendar\models\Event;
$this->title = $name = "Calendar";
?>



<h3>Календарь!</h3>

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


<h2>--------</h2>
<?php
/// Несовсем уверен что подход оправдан, но всё же... + Не люблю загоняться в цыклах, Но походу иначе не как
     foreach($Activity as $Calendar) {
         
$MyEvent = new Event;
$MyEvent->id = $Calendar['id'];
//////
//Форма перехода
echo "<a href ='http://yii2/index.php?r=site/day' > Day </a>";



//////
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
        
     }


?>

<?= edofre\fullcalendar\Fullcalendar::widget([
        'events'=>$events
    ]);
?>

<h1>----------</h1>

<table>
    <tr>   
        <td> Понидельник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
    <tr>
                <td> Понидельник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
    <tr>
              <td> Понидельник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>  
    </tr>
    <tr>
                <td> Понидельник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='http://yii2/index.php?r=site/day' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
</table>