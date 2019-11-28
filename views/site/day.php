<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$thisday = 12;
// $thisday будет генерироваться при каждом нажатии
$this->title = 'this day'.$thisday;

?>

<table>
    <tr>
        <td> 8 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td><?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
         <td> 9 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td><?=" ActivityInfo "?></td>     
        <td> X </td> 
    </tr>
    <tr>
        <td> 10 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 11 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 12 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 13 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 14 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
         <td> 15 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 16 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
         <td> 17 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 18 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    <tr>
        <td> 19 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
        <tr>
        <td> 20 часов </td>
        <td><?=" ActivityName" ?></td>
        <td><?=" Activity " ?></td>
        <td> <?=" ActivityInfo "?></td>
        <td> X </td>
    </tr>
    </tr>
</table>

<a href = "http://yii2/index.php?r=site/redactor">Редактор</a>
<a href = "http://yii2/index.php?r=site/calendar">Вернуться в календарь</a>