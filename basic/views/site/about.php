<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'holamundo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Página acerca de.... puedes modificar el archivo: 
    </p>

    <code><?= __FILE__ ?></code>
</div>
