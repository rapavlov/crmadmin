<?php echo \yii\widgets\DetailView::widget([
	'model' => $model,
	'attributes' => [
		['attribute' => 'id'],
		['attribute' => 'data-create', 'value' => $model->birth_date->format("Y-m-d")],
		
	]
]) ?>