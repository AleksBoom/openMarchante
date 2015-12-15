<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Destinos;

class DestinosController extends Controller
{
    public function actionIndex()
    {
        $query = Destinos::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $destinos = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'destinos' => $destinos,
            'pagination' => $pagination,
        ]);
    }
}