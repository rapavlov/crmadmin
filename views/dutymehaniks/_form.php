<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Mehaniks;
use app\models\Azsclient;
use app\models\Status;
use yii\web\View;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;

use phpnt\chartJS\ChartJs;
/* @var $this yii\web\View */
/* @var $model app\models\Dutymehaniks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dutymehaniks-form">

    <?php $form = ActiveForm::begin();

    echo $form->field($model, 'begin_duty')->widget(DateTimePicker::className(),
        [
            'name' => 'dp_1',
            'type' => DateTimePicker::TYPE_INPUT,
            'options' => ['placeholder' => 'Ввод даты/времени...'],
            'convertFormat' => true,
            'value'=> date("Y-m-d H:i:s",(integer) $model->begin_duty),
            'pluginOptions' => [
                'format' => 'yyyy-MM-dd HH:i:s',
                'autoclose'=>true,
                'weekStart'=>1, //неделя начинается с понедельника
                'startDate' => '01.05.2017 00:00', //самая ранняя возможная дата
                'todayBtn'=>true, //снизу кнопка "сегодня"
            ],
        ]);

     echo $form->field($model, 'end_duty')->widget(DateTimePicker::className(),
        [
            'name' => 'dp_1',
            'type' => DateTimePicker::TYPE_INPUT,
            'options' => ['placeholder' => 'Ввод даты/времени...'],
            'convertFormat' => true,
            'value'=> date("Y-m-d H:i:s",(integer) $model->end_duty),
            'pluginOptions' => [
                'format' => 'yyyy-MM-dd HH:i:s',
                'autoclose'=>true,
                'weekStart'=>1, //неделя начинается с понедельника
                'startDate' => '01.05.2017 00:00', //самая ранняя возможная дата
                'todayBtn'=>true, //снизу кнопка "сегодня"
            ],
        ]);

     echo $form->field($model, 'mehanik')
            ->dropDownList(ArrayHelper::map(Mehaniks::find()
            ->all(), 'id', 'name'));

    echo $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Записать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
