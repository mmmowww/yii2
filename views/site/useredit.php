<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $name = "Y!";
use yii\base\Widget;
use frontend\widgets\Mywidget;

?>
<h2>1</h2>
<?=widget::widget();


 ?>

<h2>1</h2>
<h1>Добовление</h1>>
<?php $form = ActiveForm::begin(); ?>

<h2>iduser</h2>
<?= $form->field($model,'Adid')->textInput() ?> 
<h2>NameUser</h2>
<?= $form->field($model,'AduserName')->textInput() ?> 
<h2>Пароль</h2>
<?= $form->field($model,'Adpassword' )->textInput() ?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Conform?', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>


<h1>Удаление</h1>>
<?php $form = ActiveForm::begin(); ?>

<h2>iduser</h2>
<?= $form->field($model,'Delid')->textInput() ?> 
<h2>NameUser</h2>
<?= $form->field($model,'DeluserName')->textInput() ?> 
<h2>Пароль</h2>
<?= $form->field($model,'Delpassword' )->textInput() ?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Conform?', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>

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

<?


?>
