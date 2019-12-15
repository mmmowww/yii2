<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\BDSEARCH;
use app\models\EntryForm;
use app\models\idredactor;
use app\models\Registration;
use app\models\login;
use app\models\Activity;
use app\models\insertActivity;
use app\models\useredit;
use app\components\MyBehavior;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /////////////
    public function actionLook(){
 
    $res = (new \yii\db\Query())
    ->select(['id', 'name','Coment'])
    ->from('comment')
    ->all();










    /////////////////////////////////////////////
        return $this->render('hi',['res'=>$res]);
    }
    public function actionInsertcoment(){
//$Name = Yii::$app->request->post('Name');
//$Coment = Yii::$app->request->post('Coment');
//$DateBD = Yii::$app->request->post('DateBD');
//$DateClient = Yii::$app->request->post('DateClient');
//$ip = Yii::$app->request->post('ip');
//$country = Yii::$app->request->post('country');
//$city = Yii::$app->request->post('city');
//$Mheight = Yii::$app->request->post('Mheight');
//$Mwidth = Yii::$app->request->post('Mwidth');
       


/*
$test = Yii::$app->request->post();
return $this->render('test',[
'test' => $test]);
*/


/////////////////////////// https://github.com/yiisoft/yii2/blob/master/docs/guide-ru/start-forms.md



 $model = new EntryForm();

return $this->render('test', ['model' => $model]);



}
public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...
 
            return $this->render('test', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('test', ['model' => $model]);
        }
    }
///////////////////////////////
   
  public function  actionCalendar(){

   // $data = array();
    ////
  //  $DATE = new app\models\Activity;
    //// 
  $Activity=Activity::find()->asArray()->all();
  
    return $this->render('calendar',[
      'Activity'=>$Activity
    ]);
        ///,['DATE' => $DATE]);
}
public function actionDay($id){

  $Activity  =  Activity::find()->asArray()->from('Activity')->where(['id'=>$id])->limit(10)->all();
    return $this->render('day',[
'Activity'=>$Activity

    ]);
}

public function actionThisactivity(){
   
    /////// EditActivity /////////6699/////
    $model = new Activity();
    $request = Yii::$app->request->post();
    $Activity  = Activity::find()->asArray()->all();
    $insert = new insertActivity();
   
    ////////Проверка
    $dataStart  = $request['Activity']['dataStart'];
    $dateFinish  = $request['Activity']['dateFinish'];
    ////////////////////////////////////////////////////////////////
    if($dataStart <= $dateFinish){
     
$id = $request['Activity']['id'];
$activity= $request['Activity']['activity'];
$activityinfo= $request['Activity']['activityinfo'];
$currentDate = $request['Activity']['currentDate'];
$dataStart= $request['Activity']['dataStart'];
$dateFinish = $request['Activity']['dataFinish'];
$userName = $request['Activity']['userName'];   
$bdMount= $request['Activity']['bdMounth'];
$bdWeek= $request['Activity']['bdWeek'];  
$bdDay= $request['Activity']['bdDay'];  
$reapit= $request['Activity']['reapit'];  
$Block= $request['Activity']['Block'];  
////////////
 $insert = Yii::$app->db->createCommand("INSERT INTO `activity` (`id`, `activity`, `activityinfo`, `currentDate`, `dataStart`, `dateFinish`, `userName`, `bdMount`, `bdWeek`, `bdDay`, `reapit`, `Block`, `DayRule`) VALUES (NULL, '".$activity."', '".$activityinfo."', NULL, '".$dataStart."', '".$dataFinish."', '".$userName."', '2019-12-11', '".$bdWeek."', '".$bdDay."', '".$reapit."', '".$Block."', NULL);")->execute();
    }
/////////////////////////////////////////////// ////////
    //// Добить редактировку
 $request = Yii::$app->request->post();

 $Editid = $request['Activity']['Editid'];
 $Editactivity = $request['Activity']['Editactivity'];
 $Editactivityinfo = $request['Activity']['Editactivityinfo'];
 $EditcurrentDate = $request['Activity']['EditcurrentDate'];
 $EditdataStart = $request['Activity']['EditdataStart'];
 $EditdateFinish = $request['Activity']['EditdateFinish'];
 $EdituserName = $request['Activity']['EdituserName']; 
 $EditbdMount = $request['Activity']['EditbdMount'];
 $EditbdWeek = $request['Activity']['EditbdWeek'];
 $EditbdDay = $request['Activity']['EditbdDay'];
 $Editreapit = $request['Activity']['Editreapit'];
 $EditBlock = $request['Activity']['EditBlock'];
 $EditDayRule = $request['Activity']['EditDayRule'];

  $update =  Yii::$app->db->createCommand("UPDATE `activity` SET `activity` = '".$Editactivity."', `activityinfo` = '".$Editactivityinfo."', `currentDate` = '2019-12-05 00:00:00', `userName` = '".$EdituserName."', `bdWeek` = '".$EditbdWeek."', `bdDay` = '".$EditbdDay."' WHERE `activity`.`id` = ".$Editid.";");






////////
 return $this->render('thisactivity',[
  'model'=>$model,
  'Activity' => $Activity,
]
);
}

/////////6699/////

public function actionRedactor(){
      $model =  new idredactor();   
   
    return $this->render('redactor',['model' => $model]);
}
public function actionRegistration(){
 // $model = new login();
//////////////////Неработает
//  $model->userName = Yii::$app->request->post('userName');
//  $model->userPasword = Yii::$app->request->post('userPasword');
//  $model->userEmail =  Yii::$app->request->post('userEmail');
//  $model->save();
////////////////////////Неработает
 /*
 $request = Yii::$app->request;
 $model->userName = $request->post('userName');
 $model->userPassword = $request->post('userPassword');
 $model->userEmail = $request->post('userEmail');
*/
//////////////////////////////



$model = new Registration();
$request = Yii::$app->request->post();


$userName = $request["Registration"]['userName'];
$userPasword = $request["Registration"]['userPassword'];
$userEmail =  $request["Registration"]['userEmail'];

 ////////Worked \/
 Yii::$app->db->createCommand("INSERT INTO `accountuser` (`id`, `userName`, `userPassword`, `userEmail`, `userRole`) VALUES (NULL, '".$userName."', '".$userPasword."', '".$userEmail."', 'NULL');")->execute();
/////////////////////////////













$test = $userName;


  return $this->render('registration',[
    'model'=>$model,
    'test'=>$test
    
  ]);
}
public function actionLoginok(){
  
 
  
  return $this->render('loginok');
}
public function actionEdit(){
  
 
  
  return $this->render('editactivity');
}
public function actionEdituser(){
    $Request = Yii::$app->request->post();
    $bd = new useredit();
    $activity = new Activity();
    $model = new useredit();
 
    $MyCompanentsBehavior = $model->userRegistered();
////////ADD

if(is_null($request['useredit']['Adid']) or null !== $request['useredit']['Adid'] or empty($request['useredit']['Adid'])){

 



$bd->id = $reqvest['Adid']; 
$bd->userName = $reqvest['AduserName'];  
$bd->password = $reqvest['Adpassword']; 
$bd->save();

}

///////Delite
if(is_null($request['useredit']['Delid']) or null !== $request['useredit']['Delid'] or empty($request['useredit']['Delid'])){


$id =$reqvest['Delid'];     
$userName = $reqvest['DeluserName'];  
$password = $reqvest['Delpassword']; 

  
$bd->id =$reqvest['Delid'];     
$bd->userName = $reqvest['DeluserName'];  
$bd->password = $reqvest['Delpassword']; 
$bd->delete(); 

}

///////Edit
if(is_null($request['useredit']['Editid']) or null !== $$request['useredit']['Editid'] or empty($$request['useredit']['Editid'])){



$id =$reqvest['Editid'];     
$userName = $reqvest['EdituserName'];  
$password = $reqvest['Editpassword']; 


 $bd->id =$reqvest['Editid'];     
$bd->userName = $reqvest['EdituserName'];  
$bd->password = $reqvest['Editpassword']; 
$bd->update();


}


return $this->render('useredit',['model' => $model,
                                  'MyCompanentsBehavior'=>$MyCompanentsBehavior,
                                ]);
//        'admodel'=>$admodel,
//        'Delmodel'=>$Delmodel,
//        'Editmodel'=>$Editmodel,
//        ]);

  }
  public function actionPersonaluser(){
   $activityUser = new Activity();
   $activity = new useredit();
    $request = Yii::$app->request->post();
   /// $casheBD = ;
   /////
$model;
 $sessionUserName = Yii::$app->request->post('userName');
   ///////
  
   $user = $activityUser::find()->asArray()->where('userName = :userName', [':userName' => $sessionUserName])->all(); // Ввыборка по базе текущего пользователя

    return $this->render('personaluser',
      [
'activityUser'=>$activityUser,
'activity'=>$activity,
'request'=>$request,

      ]);
  }
}
