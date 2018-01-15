<?php

use yii\helpers\Html;
use yii\grid\GridView;
use phpnt\chartJS\ChartJs;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дежурство';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dutymehaniks-index">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
    //debug($dataProvider);


    $duty_models = $dataProvider->getModels();
    $work_mehaniks = $is_work_mehaniks->getModels();
    $startDate = new DateTime();
    $endDate = new DateTime();
    $startDateInt = new DateInterval( "P1M" );
    $endDateInt = new DateInterval( "P1M" );
    $startDate->sub( $startDateInt );
    $endDate->add( $endDateInt );

    $periodInt = new DateInterval( "P1D" );
    $period = new DatePeriod( $startDate, $periodInt, $endDate );
    //debug($startDate->format("Y-m-d"));
    $period_array = [];
    foreach ($period as $date)
    {
        $period_array[] = $date->format("Y-m-d");
    }
    //debug($period_array);
    //debug($duty_models);
    //die(0);
    $work_date_array = [];
    $result_arr = [];
    $num = 0;
    foreach ($work_mehaniks as $work_mehanik)
    {
        foreach ($period_array as $date)
        {
            $work_date_array[$work_mehanik['id']][$date] = 'null';
        }
        foreach ($duty_models as $duty_model)
        {
            if ($duty_model['mehanik'] == $work_mehanik['id'] )
            {
                $begin_duty = date_create_from_format('Y-m-d H:i:s', $duty_model[begin_duty]);
                $begin_duty = $begin_duty->modify('-1 day');
                $end_duty = date_create_from_format('Y-m-d H:i:s', $duty_model[end_duty]);
                //$end_duty = $end_duty->modify('-1 day');
                $date_range = new \DatePeriod($begin_duty->setTime(0, 1, 0),
                    new \DateInterval('P1D'),
                    $end_duty->setTime(23, 59, 59),
                    \DatePeriod::EXCLUDE_START_DATE);
                //debug($work_mehanik);
                //die(0);
                $num = $num +1;
                foreach ($date_range as $date)
                {
                    if (in_array($date->format("Y-m-d"), $period_array))
                    {
                        $work_date_array[$work_mehanik['id']][$date->format("Y-m-d")] = 1;
                        //$work_date_array[$work_mehanik['id']][$date->format("Y-m-d")] = 1;
                       // $work_date_array[$work_mehanik['id']][] = 1;
                        //echo $date->format("Y-m-d") . "<br>";
                        //debug($work_date_array);
                        //die(0);
                    } else {
                        $work_date_array[$work_mehanik['id']][$date->format("Y-m-d")] = 'null';
                        //$work_date_array[$num][$date->format("Y-m-d")] = 0.1;
                        //$work_date_array[$work_mehanik['id']][$date->format("Y-m-d")] = 0.1;
                    }
                    //debug($date);
                    //die(0);
                }
                //debug($result_arr[$num]);
                //die(0);
                $dataDutyMehaniks['labels'] = $period_array;
                $dataDutyMehaniks['datasets'][$num]['data'] = $result_arr[$num];
                $dataDutyMehaniks['datasets'][$num]['label'] = $work_mehanik['name'];
                $dataDutyMehaniks['datasets'][$num]['fill'] = true;
                $dataDutyMehaniks['datasets'][$num]['lineTension'] = 0.1;
                $dataDutyMehaniks['datasets'][$num]['backgroundColor'] = "rgba(75,192,192,0.4)";
                $dataDutyMehaniks['datasets'][$num]['borderColor'] = "rgba(75,192,192,1)";
                $dataDutyMehaniks['datasets'][$num]['borderCapStyle'] = 'butt';
                $dataDutyMehaniks['datasets'][$num]['borderDash'] = [];
                $dataDutyMehaniks['datasets'][$num]['borderDashOffset'] = 0.1;
                $dataDutyMehaniks['datasets'][$num]['borderJoinStyle'] = 'miter';
                $dataDutyMehaniks['datasets'][$num]['pointBorderColor'] = "rgba(75,192,192,1)";
                $dataDutyMehaniks['datasets'][$num]['pointBackgroundColor'] = "#fff";
                $dataDutyMehaniks['datasets'][$num]['pointBorderWidth'] = 1;
                $dataDutyMehaniks['datasets'][$num]['pointHoverRadius'] = 10;
                $dataDutyMehaniks['datasets'][$num]['pointHoverBackgroundColor'] = "rgba(75,192,192,1)";
                $dataDutyMehaniks['datasets'][$num]['pointHoverBorderColor'] = "rgba(220,220,220,1)";
                $dataDutyMehaniks['datasets'][$num]['pointHoverBorderWidth'] = 2;
                $dataDutyMehaniks['datasets'][$num]['pointRadius'] = 1;
                $dataDutyMehaniks['datasets'][$num]['pointHitRadius'] = 10;
                $dataDutyMehaniks['datasets'][$num]['spanGaps'] = false;
            }
        }
        foreach ($work_date_array[$work_mehanik['id']] as $date_ar)
        {
            $result_arr[$work_mehanik['id']][] = $date_ar;
        }
    }
    //debug($dataDutyMehaniks);
    //die(0);
    $dataWeatherOne = [
    'labels' => $period_array,
    //'labels' => ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
    'datasets' => [
    [
    'data' => $result_arr[1],
        /*'data' => [null, null, null, null, null, null, null, null,null, null, null, null,
            1, 1,1,1, 1,1, 1,1, 1,1, 1,1,],*/
            /*'data' => ['null', 'null', 'null','null', 'null', 'null', 'null', 'null','null', 'null', 'null', 'null',
                '1', '1','1','1', '1','1', '1','1', '1','1', '1','1',],*/
    //'label' => "Вова.",
    'label' => $work_mehaniks[0]['name'],
    'fill' => true,
    'lineTension' => 0.1,
    'backgroundColor' => "rgba(75,192,192,0.4)",
    'borderColor' => "rgba(75,192,192,1)",
    'borderCapStyle' => 'butt',
    'borderDash' => [],
    'borderDashOffset' => 0.1,
    'borderJoinStyle' => 'miter',
    'pointBorderColor' => "rgba(75,192,192,1)",
    'pointBackgroundColor' => "#fff",
    'pointBorderWidth' => 1,
    //'pointHoverRadius' => 5,
    'pointHoverRadius' => 10,
    'pointHoverBackgroundColor' => "rgba(75,192,192,1)",
    'pointHoverBorderColor' => "rgba(220,220,220,1)",
    'pointHoverBorderWidth' => 2,
    'pointRadius' => 1,
    'pointHitRadius' => 10,
    'spanGaps' => false,
    //'spanGaps' => true,
    ],
    [
    /*'data' => [null, null, 1, 1,1, 1,1, 1,1, 1,1, 1, 1, null, null,null,
                null, null,null, null, null, null,null, 1,1, 1,1, 1,1, 1,1, 1,1, 1,
               null, null, null],*/
    'data' => $result_arr[2],
    //'label' => "Виктор.",
        'label' => $work_mehaniks[1]['name'],
    //'fill' => false,
    //'fill' => true,
    'lineTension' => 0.1,
    'backgroundColor' => "rgba(75,100,192,0.4)",
    'borderColor' => "rgba(75,100,192,1)",
    'borderCapStyle' => 'butt',
    'borderDash' => [],
    'borderDashOffset' => 2.0,
    'borderJoinStyle' => 'miter',
    'pointBorderColor' => "rgba(75,100,192,1)",
    'pointBackgroundColor' => "#fff",
    'pointBorderWidth' => 1,
    //'pointHoverRadius' => 5,
    'pointHoverRadius' => 10,
    'pointHoverBackgroundColor' => "rgba(75,100,192,1)",
    'pointHoverBorderColor' => "rgba(220,220,220,1)",
    'pointHoverBorderWidth' => 2,
    'pointRadius' => 1,
    'pointHitRadius' => 10,
    'spanGaps' => false,
    ]
    ]
    ];
    // вывод графиков
   /* echo ChartJs::widget([
    'type'  => ChartJs::TYPE_LINE,
    'data'  => $dataDutyMehaniks,
    'options'   => []
    ]);*/
    echo ChartJs::widget([
    'type'  => ChartJs::TYPE_LINE,
    'data'  => $dataWeatherOne,
    'options'   => []
    ]);
?>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'begin_duty',
            'end_duty',
            'mehaniksname',
            'comment',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{update}  {delete}'],
        ],
    ]); ?>
</div>
