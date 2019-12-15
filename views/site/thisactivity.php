<? 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $name = "This Activity";
?>
<button> delete this activity </button> <a href = "#">return calndar</a> <a href = "#"> return this day </a>
<?= "this Activity" ?>
<?= "this Activity info" ?> <a href = "#"> red </a> 
<?= "this Activity info" ?> <a href = "#"> red </a> 
<h2>Форма редактировки события</h2>
<h2>Все события</h2>

<?php foreach($Activity as $MyActivity){
echo $MyActivity['id'];
echo "</br>";
echo $MyActivity['activity'];
echo "</br>";
echo $MyActivity['activityinfo'];
echo "</br>";
echo $MyActivity['currentDate'];
echo "</br>";
echo $MyActivity['dataStart'];
echo "</br>";
echo $MyActivity['dateFinish'];
echo "</br>";
echo $MyActivity['userName'];
echo "</br>";
echo $MyActivity['bdMount'];
echo "</br>";
echo $MyActivity['bdWeek'];
echo "</br>";
echo $MyActivity['bdDay'];
echo "</br>";
echo $MyActivity['reapit'];
echo "</br>";
echo $MyActivity['Block'];
echo "</br>";
echo '</br> Next Block </br>';
};
?>





<h2>Добавить событие</h2>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    
    <?php $form = ActiveForm::begin(); ?>

<h2>Id Activity</h2>
<?= $form->field($model,'id')->textInput() ?> 
<h2>Activity</h2>
<?= $form->field($model,'activity')->textInput() ?> 
<h2>Информацыя по Activity</h2>
<?= $form->field($model,'activityinfo' )->textInput() ?>
<h2>Текущая дата (Потом убрать)</h2>
<?= $form->field($model,'currentDate')->textInput() ?> 	
<h2>Дата начала</h2>
<?= $form->field($model,'dataStart')->textInput() ?> 
<h2>Дата конца</h2>
<?= $form->field($model,'dateFinish')->textInput() ?> 
<h2>Имя пользователя</h2>
<?= $form->field($model,'userName')->textInput() ?>	
<h2>Номер месяца</h2>
<?= $form->field($model,'bdMount')->textInput() ?> 
<h2>Номер недели</h2>
<?= $form->field($model,'bdWeek')->textInput() ?>
<h2>Номер дня</h2>
<?= $form->field($model,'bdDay')->textInput() ?>	
<h2>Повторяеться?</h2>
<?= $form->field($model,'reapit')->textInput() ?> 
<h2>Блокирует ли?</h2>
<?= $form->field($model,'Block')->textInput() ?>	
<h2>Правила дня (JSON)</h2>
<?= $form->field($model,'DayRule')->textInput() ?> 
        

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Conform?', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>







<h2>Отредактировать событие</h2>


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    
    <?php $form = ActiveForm::begin(); ?>

<h2>Id Activity</h2>
<?= $form->field($model,'Editid')->textInput() ?> 
<h2>Activity</h2>
<?= $form->field($model,'Editactivity')->textInput() ?> 
<h2>Информацыя по Activity</h2>
<?= $form->field($model,'Editactivityinfo' )->textInput() ?>
<h2>Текущая дата (Потом убрать)</h2>
<?= $form->field($model,'EditcurrentDate')->textInput() ?> 	
<h2>Дата начала</h2>
<?= $form->field($model,'EditdataStart')->textInput() ?> 
<h2>Дата конца</h2>
<?= $form->field($model,'EditdateFinish')->textInput() ?> 
<h2>Имя пользователя</h2>
<?= $form->field($model,'EdituserName')->textInput() ?>	
<h2>Номер месяца</h2>
<?= $form->field($model,'EditbdMount')->textInput() ?> 
<h2>Номер недели</h2>
<?= $form->field($model,'EditbdWeek')->textInput() ?>
<h2>Номер дня</h2>
<?= $form->field($model,'EditbdDay')->textInput() ?>	
<h2>Повторяеться?</h2>
<?= $form->field($model,'Editreapit')->textInput() ?> 
<h2>Блокирует ли?</h2>
<?= $form->field($model,'EditBlock')->textInput() ?>	
<h2>Правила дня (JSON)</h2>
<?= $form->field($model,'EditDayRule')->textInput() ?> 
        

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Edit?', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>


   <? $calendar = Url::to(['site/calendar']); ?>
<a href = <?=$calendar?>>Вернуться в календарь</a>