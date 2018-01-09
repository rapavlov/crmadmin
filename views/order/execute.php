<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php // echo Html::a('Create Order Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'rowOptions' => function ($model, $key, $index, $grid)
    {
		if(($model->importance == 2) && ($model->status == 1)) {
          return ['style' => 'background-color:IndianRed;'];
		}
		if($model->status == 1) {
          return ['style' => 'background-color:LightPink;'];
		}
	  
		if($model->status == 2) {
          return ['style' => 'background-color:grey;'];
		}
		
		if($model->status == 3) {
          return ['style' => 'background-color:Olive;'];
		}
	    if($model->status == 4) {
          return ['style' => 'background-color:DarkOrange;'];
		}
    },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data_create',
            //'importance',
            'importancename',
            //'company',
            //'address',
            'azsclientaddress',
			'problem',
			'statusname', 
			//'mehanic_id',
			'mehaniksname',
			'begin_work_time',
			'end_work_time',
			'description_work',
			'materials',
			'recommendations',
            // 'problem:ntext',
            // 'mehanic_id',
            // 'begin_work_time',
            // 'end_work_time',
            // 'description_work:ntext',
            // 'materials:ntext',
            // 'recommendations:ntext',

            [
				'class' => 'yii\grid\ActionColumn',
				'template'=>'{update} {link}',
			],
        ],
    ]); ?>
</div>
