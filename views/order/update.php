<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\order\OrderRecord */

$this->title = 'Выполнение заявки: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Подтвердить';
?>
<div class="order-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formUpdate', [
        'model' => $model,
    ]) ?>

</div>
