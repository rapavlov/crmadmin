<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dutymehaniks */

$this->title = 'Изменить запись: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Дежурство', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="dutymehaniks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
