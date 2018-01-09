<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Status;

use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\order\OrderRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-record-form">

    <?php //echo Yii::$app->security->generatePasswordHash('office'); ?>
	
    <?php $form = ActiveForm::begin(); ?>

    <?php $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'data_create')->textInput() ?>
    <?php  $form->field($model, 'data_create')->textInput() ?>

    <?php  $form->field($model, 'importance')->textInput() ?>

    <?php //$form->field($model, 'company')->textInput(['maxlength' => true]) ?>
    <?php $form->field($model, 'company')->textInput() ?>

    <?php  //$form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    <?php  $form->field($model, 'address')->textInput() ?>

    <?php  $form->field($model, 'problem')->textarea(['rows' => 6]) ?>

    <?php  //$form->field($model, 'mehanic_id')->textInput(['maxlength' => true]) ?>
    <?php  $form->field($model, 'mehanic_id')->textInput() ?>

    <?php // echo$form->field($model, 'begin_work_time')->textInput() ?>
    <?php  echo $form->field($model, 'begin_work_time')->widget(DateTimePicker::className(),
								[
									'name' => 'dp_1',
									'type' => DateTimePicker::TYPE_INPUT,
									'options' => ['placeholder' => 'Ввод даты/времени...'],
									'convertFormat' => true,
									'value'=> date("Y-m-d H:i:s",(integer) $model->begin_work_time),
									'pluginOptions' => [
															'format' => 'yyyy-MM-dd H:i:s',
															'autoclose'=>true,
															'weekStart'=>1, //неделя начинается с понедельника
															'startDate' => '01.05.2017 00:00', //самая ранняя возможная дата
															'todayBtn'=>true, //снизу кнопка "сегодня"
														],
								])
	?>

    <?php // echo $form->field($model, 'end_work_time')->textInput() ?>
	<?php  echo $form->field($model, 'end_work_time')->widget(DateTimePicker::className(),
								[
									'name' => 'dp_1',
									'type' => DateTimePicker::TYPE_INPUT,
									'options' => ['placeholder' => 'Ввод даты/времени...'],
									'convertFormat' => true,
									'value'=> date("Y-m-d H:i:s",(integer) $model->end_work_time),
									'pluginOptions' => [
															'format' => 'yyyy-MM-dd H:i:s',
															'autoclose'=>true,
															'weekStart'=>1, //неделя начинается с понедельника
															'startDate' => '01.05.2017 00:00', //самая ранняя возможная дата
															'todayBtn'=>true, //снизу кнопка "сегодня"
														],
								])
	?>


    <?= $form->field($model, 'status')
			->dropDownList(ArrayHelper::map(Status::find()->all(), 'id', 'name'),
			[
				'prompt' => 'Выберите статус заявки'
			]); ?>
	
    <?= $form->field($model, 'description_work')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'materials')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recommendations')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Подтвердить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
