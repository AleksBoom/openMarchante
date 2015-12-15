<?php
/*views/country/infex.php*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Destinos</h1>
<ul>
<?php foreach ($destinos as $destinos): ?>
    <li>
        <?= Html::encode("{$destinos->name} ({$destinos->code})") ?>:
        <?= $destinos->viajes ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>