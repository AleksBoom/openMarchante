<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Detalle;

class DetalleController extends Controller
{
    public function actionIndex()
    {
        $query = Detalle::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $detalle = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'detalle' => $detalle,
            'pagination' => $pagination,
        ]);
    }
}