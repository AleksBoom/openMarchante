<?php
/*views/country/infex.php*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Servicios</h1>
<ul>
<?php foreach ($servicios as $servicios): ?>
    <li>
        <?= Html::encode("{$servicios->name} ({$servicios->code})") ?>:
        <?= $servicios->paquetes ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>