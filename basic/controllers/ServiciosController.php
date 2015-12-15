<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Servicios;

class ServiciosController extends Controller
{
    public function actionIndex()
    {
        $query = Servicios::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $servicios = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'servicios' => $servicios,
            'pagination' => $pagination,
        ]);
    }
}