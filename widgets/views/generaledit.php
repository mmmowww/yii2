<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $name = "Y!";
use yii\base\Widget;
use frontend\widgets\Mywidget;

?>
<h1>Редактирование</h1>>
<?php $form = ActiveForm::begin(); ?>

<h2>iduser</h2>
<?= $form->field($model,'Editid')->textInput() ?> 
<h2>NameUser</h2>
<?= $form->field($model,'EdituserName')->textInput() ?> 
<h2>Пароль</h2>
<?= $form->field($model,'Editpassword' )->textInput() ?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Conform?', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>
