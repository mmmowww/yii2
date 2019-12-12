<?
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\widgets\Mywidget;
?>
<h2>Персональная страница юзера</h2>

<?php $form = ActiveForm::begin(); ?>

<h2>You name user</h2>
<?=$form->field($model,'userName')->textInput() ?> 

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Conform?', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>
<?widget::widget();
?>