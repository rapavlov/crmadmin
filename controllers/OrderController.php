<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\order\OrderRecord;
use app\models\order\Order;
use app\models\order\Dutymehaniks;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use Yii;

class OrderController extends Controller {
	
	public $user_role = 'guest';
	
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','add','addduty','execute', 'index'],
                'rules' => [
                    [
                        'actions' => ['logout', 'add','addduty','execute', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
					'delete' => ['POST'],
					'add' => ['POST', 'get'],
					'addduty' => ['POST', 'get'],
					'execute' => ['POST', 'get'],
					'index' => ['POST', 'get'],
                ],
            ],
        ];
    }
	
	public function beforeAction($action)
	{
	$parentAllowed = parent::beforeAction($action);
	$meAllowed = !Yii::$app->user->isGuest;
	
	//$this->user_role = Yii::$app->user->getRole();
	$this->user_role = \Yii::$app->user->identity->role;
	
	return $parentAllowed and $meAllowed;
	}
	
	public function actionAdd()
	{
		//debug($this->user_role);
		if (($this->user_role == 'admin') or ($this->user_role == 'office'))
			{
				$order	= new OrderRecord();				
				if ($this->load($order, $_POST)) 
				{			
					$this->store($this->makeOrder($order));
					return $this->redirect('index');
				}
				return $this->render('add', compact('order'));	
			} else {
				return $this->render( 'notallow');
			}
	}

	private function load(OrderRecord $order, array $post)
	{
		return $order->load($post) 			
			and $order->validate();			
	}
	
	public function actionIndex()
	{
        if (($this->user_role == 'admin') or ($this->user_role == 'office') or ($this->user_role == 'mehanik'))
        {
            $dataProvider = $this->findRecordsByQuery();
            return $this->render('index', compact('dataProvider'));
        } else {
            return $this->render( 'notallow');
        }
	}
	/*public function actionQuery()
	{
		return $this->render('query');
	}*/
	private function findRecordsByQuery()
	{
		$id = Yii::$app->request->get('id');
		$records = $this->getRecordsById($id);
		$dataProvider = $this->wrapIntoDataProvider($records);
		return $dataProvider;
	}
	private function wrapIntoDataProvider($data)
	{
		/*
		return new ArrayDataProvider([
			'allModels' => $data,
			'pagination' => false
		]);*/

		$dataProvider = new ArrayDataProvider([
		'allModels' => OrderRecord::find()
			->orderBy('id DESC')
			->all(),
		]);
		return $dataProvider;
	}
	private function getRecordsById($id)
	{
		$order = OrderRecord::findOne(['id' => $id]);
		if ( ! $order) {
			return [];
		}
		
		return [$this->makeOrder($order)];
	}
	
	
	private function store(Order $order)
	{
		$orderRecord = new OrderRecord();
		
		$orderRecord->data_create = $order->data_create;	
		$orderRecord->importance = $order->importance;	
		$orderRecord->company = $order->company;	
		$orderRecord->address = $order->address;	
		$orderRecord->problem = $order->problem;	
		$orderRecord->status = $order->status;	
		$orderRecord->mehanic_id = $order->mehanic_id;	
		$orderRecord->begin_work_time = $order->begin_work_time;	
		$orderRecord->end_work_time = $order->end_work_time;	
		$orderRecord->description_work = $order->description_work;	
		$orderRecord->materials = $order->materials;	
		$orderRecord->recommendations = $order->recommendations;	
				
		//$orderRecord->birth_date = $order->birth_date->format("Y-m-d");		
		$orderRecord->save();
		
		
	}
	private function makeOrder(OrderRecord $orderRecord)
	{		
		//$name = $customerRecord->name;
		//$birthDate = new \DateTime($customerRecord->birth_date);
		$order = new Order();		
		$order->data_create = $orderRecord->data_create;	
		$order->importance = $orderRecord->importance;	
		$order->company = $orderRecord->company;	
		$order->address = $orderRecord->address;	
		$order->problem = $orderRecord->problem;	
		$order->status = $orderRecord->status;	
		$order->mehanic_id = $orderRecord->mehanic_id;	
		$order->begin_work_time = $orderRecord->begin_work_time;	
		$order->end_work_time = $orderRecord->end_work_time;	
		$order->description_work = $orderRecord->description_work;	
		$order->materials = $orderRecord->materials;	
		$order->recommendations = $orderRecord->recommendations;		
		return $order;
	}	
		
	public function actionExecute()
    {
		//debug($this->user_role);
		if (($this->user_role == 'admin') or ($this->user_role == 'mehanik'))
        {
				$dataProvider = new ActiveDataProvider([
					'query' => OrderRecord::find()->where(['status' => [1,4]]),
					//'params' => [':status' => 1], // условие публикации
					'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
				]);

				return $this->render('execute', [
					'dataProvider' => $dataProvider,
				]);
        } else {
            return $this->render( 'notallow');
        }
    }
	
	 public function actionUpdate($id)
    {
		if (($this->user_role == 'admin') or ($this->user_role == 'mehanik'))
			{
				$model = $this->findModel($id);
       
				if ( $model->load(Yii::$app->request->post()) && $model->save())
					{
						//return $this->redirect(['view', 'id' => $model->id]);
						return $this->redirect(['execute']);
						//return $this->redirect(['view', 'id' => $model->id]);
					} else {
						return $this->render('update', [
						'model' => $model,
						]);
					}
		} else {
            return $this->render( 'notallow');
        }
    }
	
	protected function findModel($id)
    {
        if (($model = OrderRecord::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	
	
	
	
	
}