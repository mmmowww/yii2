<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = $name = "You ok! you gay!";


?>


<div class="site-hi">
    

   
     </div><h2>HI</h2>
    <code><?

var_dump($_SESION);
echo "</br>";
var_dump($_POST);
echo "</br>";
var_dump($_GET);
echo "</br>";
echo "</br>";
var_dump($_COOKIE["_csrf"]);


    ?></code>
 <div>
 	<h3>Коментики</h3>
<? //var_dump($res['id']);
 ?>
<?php 
foreach($res as $rez){ 
echo "id :".$rez["id"]."</br>";
echo "Name :".$rez["Name"]."</br>";
echo "Coment :".$rez["Coment"]."</br>";
echo "Date :".$rez["Date"]."</br>";
echo "ip :".$rez["ip"]."</br>";
echo "Country :".$rez["country"]."</br>";
echo "City :".$rez["city"]."</br>";
echo "</br>================</br>";
};
?>

<form class = "insertComent" action = "index.php?r=site/insertcoment" method = "post">
<input type="text" class="Name" value="You Name"><Br>
<input type="text" class="Coment" value="You Coments"><Br>
<input type="text" style="width:00.1px;height:00.1px" class="DateBD" value="Date();">
<input type="text" style="width:00.1px;height:00.1px" class="DateClient" value="">
<input type="text" style="width:00.1px;height:00.1px" class="ip" value=" <?=$_SERVER['REMOTE_ADDR'];?> ">
<input type="text" style="width:00.1px;height:00.1px" class="country" value="Country">
<input type="text" style="width:00.1px;height:00.1px" class="city" value="City">
<input type="text" style="width:00.1px;height:00.1px" class="Mheight" value="1321321">
<input type="text" style="width:00.1px;height:00.1px" class="Mwidth" value="41242134324">
<input v-on:click= "INS" type="submit" value="Отправить">
<input type="reset" value="Очистить">
</form>
 </div>

<div>


<h3>Mytest</h3>



<?php $form = ActiveForm::begin(); ?>

    <? $Name = $form->field($model, 'name');
   
     $Email = $form->field($model, 'email'); 
    echo "</br> ------ </br>";
    if($Name === $form){echo "TRUE";}else{echo "NOTTRUE";}
    echo "</br> ------ </br>";
?>
    <?= Html::submitButton('Отправить') ?>
   

<?php ActiveForm::end(); ?>








<?php 
/*

{ ["form"]=> object(yii\widgets\ActiveForm) (32) 
{ ["action"]=> "" 
   ["method"]=>  
     "post" ["options"]=> 
     { 
     	["id"]=>  "w0" 
       } ["fieldClass"]=>  
          "yii\widgets\ActiveField"
             ["fieldConfig"]=>  {
 } ["encodeErrorSummary"]=>  
       ["errorSummaryCssClass"]=> "error-summary" 
       ["requiredCssClass"]=>"required"
          ["errorCssClass"]=> "has-error"
               ["successCssClass"]=> "has-success" 
                     ["validatingCssClass"]=>  "validating" 
                     ["validationStateOn"]=>  "container" 
                     ["enableClientValidation"]=> ["enableAjaxValidation"]=>  ["enableClientScript"]=>  ["validationUrl"]=>  ["validateOnSubmit"]=>  ["validateOnChange"]=>  ["validateOnBlur"]=>  ["validateOnType"]=>  ["validationDelay"]=> ["ajaxParam"]=>  "ajax" ["ajaxDataType"]=>  "json" ["scrollToError"]=>  ["scrollToErrorOffset"]=>  ["attributes"]=>  {
                      } ["_fields":"yii\widgets\ActiveForm":private]=>  { } ["_id":"yii\base\Widget":private]=>  "w0" ["_view":"yii\base\Widget":private]=>  ["_events":"yii\base\Component":private]=>  { 
                      } ["_eventWildcards":"yii\base\Component":private]=>  { } ["_behaviors":"yii\base\Component":private]=>  {
  } 
} ["model"]=>  ["attribute"]=>  "Name" ["options"]=>  { ["class"]=>  "form-group" } ["template"]=>  "{label} {input} {hint} {error}" ["inputOptions"]=>  { 
	["class"]=>  "form-control" } ["errorOptions"]=>  { ["class"]=>  "help-block" } ["labelOptions"]=>  { ["class"]=>  "control-label" } ["hintOptions"]=>  {
	 ["class"]=>  "hint-block" } ["enableClientValidation"]=>  ["enableAjaxValidation"]=>  ["validateOnChange"]=>  ["validateOnBlur"]=>  ["validateOnType"]=>  ["validationDelay"]=> NULL ["selectors"]=>  {
	  } ["parts"]=>  { } ["addAriaAttributes"]=>  ["_inputId":"yii\widgets\ActiveField":private]=>  ["_skipLabelFor":"yii\widgets\ActiveField":private]=>  ["_events":"yii\base\Component":private]=>  { } ["_eventWildcards":"yii\base\Component":private]=>  { 
	 } ["_behaviors":"yii\base\Component":private]=> }

*/

?>