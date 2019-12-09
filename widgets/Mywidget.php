<?php
namespace frontend\widgets\Mywidget;

use yii\base\Widget;


class Mywidget extends Widget
{
   

    public function run()
    {
        return $this->render('generaledit'[
            'model'=>$model,
            'MyCompanentsBehavior'=>$MyCompanentsBehavior,



        ]);
    }
}



