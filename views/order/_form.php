<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\order\OrderRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_create')->textInput() ?>

    <?= $form->field($model, 'importance')->textInput() ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'problem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mehanic_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'begin_work_time')->textInput() ?>

    <?= $form->field($model, 'end_work_time')->textInput() ?>

    <?= $form->field($model, 'description_work')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'materials')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recommendations')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
