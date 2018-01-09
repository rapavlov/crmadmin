<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\order\OrderRecord */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-record-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'data_create',
            'importance',
            'company',
            'address',
            'problem:ntext',
            'mehanic_id',
            'begin_work_time',
            'end_work_time',
            'description_work:ntext',
            'materials:ntext',
            'recommendations:ntext',
        ],
    ]) ?>

</div>
