<?
// use yii\helpers\Html;  //?
use yii\helpers\BaseHtml;
use yii\widgets\ActiveForm;
use app\models\idredactor;
$this->title = "Activity Redactor";
?>
<h1>Редактирование</h1>
<?= $active = ActiveForm::begin(); 
var_dump($A);
?>
<?= $active->field($model,"idActivity");  ?>
<?= $active->field($model,"ActivityInfo");  ?>
<?= $active->field($model,"date");  ?>
<?= $active->field($model,"ip");  ?>

<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
<?=ActiveForm::end();?>

