<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\BDSEARCH;

class SelectController extends Controller
{
    public function actionSelect()
    {
        $query = BDSEARCH::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $z = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('hi', [
            "z" => $z
        ]);
    }
}