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
    
    return $this->render('calendar');
        ///,['DATE' => $DATE]);
}
public function actionDay(){
    return $this->render('day');
}

public function actionThisactivity(){
    return $this->render('thisactivity');
}
///////////////////////////////////    
public function actionRedactor(){
      $model =  new idredactor();
   
    return $this->render('redactor',['model' => $model]);;
}
}
