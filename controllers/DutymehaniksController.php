<?php

namespace app\controllers;

use app\models\Mehaniks;
use Yii;
use app\models\Dutymehaniks;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * DutymehaniksController implements the CRUD actions for Dutymehaniks model.
 */
class DutymehaniksController extends Controller
{
    public $user_role = 'guest';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','add','addduty','view', 'index', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['logout', 'add','addduty','view', 'index', 'create', 'update', 'delete'],
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
                    'view' => ['POST', 'get'],
                    'create' => ['POST', 'get'],
                    'update' => ['POST', 'get'],
                    'delete' => ['POST', 'get'],
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
    /**
     * Lists all Dutymehaniks models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (($this->user_role == 'admin') or ($this->user_role == 'office') or ($this->user_role == 'mehanik'))
        {
            $dataProvider = new ActiveDataProvider([
                'query' => Dutymehaniks::find()
                ->where(['>=', 'begin_duty', date("Y-m-d H:i:s",
                    strtotime("-1 months"))]),
            ]);
            //$query = Post::find()->where(['status' => 1]);
            $is_work_mehaniks = new ActiveDataProvider([
            'query' => Mehaniks::find()
                ->where(['is_work' => 1]),
            ]);

            return $this->render('index', [
            'dataProvider' => $dataProvider,
            'is_work_mehaniks' => $is_work_mehaniks,
            ]);
        } else
        {
            return $this->render('notallow');
        }
    }

    /**
     * Displays a single Dutymehaniks model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (($this->user_role == 'admin') or ($this->user_role == 'office'))
        {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        } else
        {
            return $this->render('notallow');
        }
    }

    /**
     * Creates a new Dutymehaniks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (($this->user_role == 'admin') or ($this->user_role == 'office'))
        {
            $model = new Dutymehaniks();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
//              return $this->redirect(['view', 'id' => $model->id]);
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else
        {
            return $this->render('notallow');
        }
    }

    /**
     * Updates an existing Dutymehaniks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (($this->user_role == 'admin') or ($this->user_role == 'office'))
        {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
                return $this->redirect(['index']);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else
        {
            return $this->render('notallow');
        }
    }

    /**
     * Deletes an existing Dutymehaniks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (($this->user_role == 'admin') or ($this->user_role == 'office'))
        {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        } else
        {
            return $this->render('notallow');
        }
    }

    /**
     * Finds the Dutymehaniks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dutymehaniks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dutymehaniks::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
