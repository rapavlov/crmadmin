<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data_create',
            'importance',
            'company',
            'address',
            // 'problem:ntext',
            // 'mehanic_id',
            // 'begin_work_time',
            // 'end_work_time',
            // 'description_work:ntext',
            // 'materials:ntext',
            // 'recommendations:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
