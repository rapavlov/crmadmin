<?php
use app\models\order\OrderRecord;
use app\models\Mehaniks;
use app\models\Azsclient;
use app\models\Status;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
/**
 * Add Customer UI.
 *
 * @var View $this
 * @var CustomerRecord $customer
 * @var PhoneRecord $phone
 */
$form = ActiveForm::begin([
	'id' => 'add-order-form'
]);
echo $form->errorSummary([$order]);
echo $form->field($order, 'data_create')->widget(DateTimePicker::className(),
								[
									'name' => 'dp_1',
									'type' => DateTimePicker::TYPE_INPUT,
									'options' => ['placeholder' => 'Ввод даты/времени...'],
									'convertFormat' => true,
									'value'=> date("Y-m-d H:i:s",(integer) $model->data_create),
									'pluginOptions' => [
															'format' => 'yyyy-MM-dd HH:i:s',
															'autoclose'=>true,
															'weekStart'=>1, //неделя начинается с понедельника
															'startDate' => '01.05.2017 00:00', //самая ранняя возможная дата
															'todayBtn'=>true, //снизу кнопка "сегодня"
														],
								]);
//echo $form->field($order, 'importance');
echo $form->field($order, 'importance')->dropDownList(
			[
				'1' => 'Обычная',
				'2' => 'Срочная',				
			],
			[
				'prompt' => 'Выберите срочность заявки'
			]);
/*echo $form->field($order, 'company')->dropDownList(
			[
				'Лукойл',
				'Октан',				
				'СибОйл',				
				'ТранСиб',				
			],
			[
				'prompt' => 'Выберите заказчика'
			]);*/
	
//echo $form->field($order, 'address');
echo $form->field($order, 'address')
			->dropDownList(ArrayHelper::map(Azsclient::find()->all(), 'id', 'address'),
			[
				'prompt' => 'Выберите адрес'
			]);
echo $form->field($order, 'problem');
/*echo $form->field($order, 'mehanic_id')->dropDownList(
			[
				'Вова',
				'Витя',				
			],
			[
				'prompt' => 'Выберите механика'
			]);*/
echo $form->field($order, 'mehanic_id')->dropDownList(ArrayHelper::map(Mehaniks::find()->all(), 'id', 'name'));
echo $form->field($order, 'status')->dropDownList(ArrayHelper::map(Status::find()->all(), 'id', 'name'),
			[
				'prompt' => 'Выберите статус заявки'
			]);
			
			
echo Html::submitButton('Создать', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>