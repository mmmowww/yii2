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
echo '<h4>День</h4>';
$URL = Url::to(['site/day','id'=>$MyEvent->id]);  // Долго сражался с тем что бы сделать примую ссылку.
echo '<a href = "'.$URL.'" >'.$MyEvent->id.'</a>';  // Пришлось сделать "Пакет" "$URL" Поечму то так выводить отказывалась <?= 

//////
$MyEvent->title = $Calendar['activity'];
$MyEvent->allDay=$Calendar['currentDate'];
$MyEvent->start = $Calendar['dataStart'];
$MyEvent->end= $Calendar['dataFinish'];

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
<?php /// Красота каторую я ещё не успел доделать
/*
<table>
    <tr>   
        <td> Понидельник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>1])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>2])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>3])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>4])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>5])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>6])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>7])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
    <tr>
                <td> Понидельник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>8])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>9])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>10])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>11])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>12])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>13])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>14])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
    <tr>
              <td> Понидельник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>15])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>16])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>17])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>18])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>19])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>20])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>21])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
    <tr>
                <td> Понидельник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>22])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Вторник :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>23])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Среда :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>24])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Четверг :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>25])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Пятница :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>26])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Суббота :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>27])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
        <td> Воскресенье :</td>
        <td> <?= "<a href ='".Url::to(['site/day','id'=>28])."' > Day </a>";?></td><td> <?= " false "; ?> </td><td> <?= "DATE" ?></td>
    </tr>
</table>

*/
?>