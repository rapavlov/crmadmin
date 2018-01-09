<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\order\OrderRecord */

$this->title = 'Create Order Record';
$this->params['breadcrumbs'][] = ['label' => 'Order Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
