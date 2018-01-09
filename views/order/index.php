<?php
use yii\grid\GridView;
//debug($dataProvider);


echo GridView::widget([
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
    'columns' => 	
	[
        'id',
        'data_create', 
        //'importance', 
        'importancename', 
        //'company', 
        'azsclientaddress', 
        'problem', 
        //'mehanic_id', 
        'mehaniksname', 
        'statusname', 
        'begin_work_time', 
        'end_work_time', 
        'description_work', 
        'materials', 
        'recommendations', 		
    ],
]); 


/*
 echo \yii\widgets\ListView::widget([
	'options' => [
		'class' => 'list-view',
		'id' => 'search_result',
	],
	'itemView' => '_order',
	'dataProvider' => $records
	]) */

?>