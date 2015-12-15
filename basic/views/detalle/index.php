<?php
/*views/country/infex.php*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Detalle</h1>
<ul>
<?php foreach ($detalle as $detalle): ?>
    <li>
        <?= Html::encode("{$detalle->name} ({$detalle->code})") ?>:
        <?= $detalle->producto ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>