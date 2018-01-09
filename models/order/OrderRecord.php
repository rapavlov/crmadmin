<?php
namespace app\models\order ;

use yii\db\ActiveRecord;
use app\models\Mehaniks;
use app\models\Importance;
use app\models\Azsclient;
use app\models\Status;

class OrderRecord extends ActiveRecord {	
	
	public static function tableName()
	{
		return 'remont_zayavki';
	}
	public function rules()
	{
		return [
			[['id'], 'number'],
			[['data_create'], 'date', 'format' => 'php:Y-m-d H:i:s' ],
			[['importance'], 'number'],
			//[['company'],'string'],
			//[['company'], 'string', 'max' => 255],
			[['address'], 'number'],
			//[['address'], 'string'],
			//[['address'], 'string', 'max' => 255],
			[['problem'], 'string'],
			[['problem'], 'string', 'max' => 255],
			[['mehanic_id'], 'number'],
			[['status'], 'number'],
			//[['mehanic_id'], 'string'],
			//[['mehanic_id'], 'string', 'max' => 255],
			[['begin_work_time'], 'date', 'format' => 'php:Y-m-d H:i:s' ],
			[['end_work_time'], 'date', 'format' => 'php:Y-m-d H:i:s' ],
			[['description_work'], 'string'],
			[['description_work'], 'string', 'max' => 1000],
			[['materials'], 'string'],
			[['materials'], 'string', 'max' => 1000],
			[['recommendations'], 'string'],
			[['recommendations'], 'string', 'max' => 1000],			
		];
	}
	public function attributeLabels()
	{
		return 
		[			
			'data_create' => 'Дата заявки',
			'importance' => 'Важность',
			'importancename' => 'Важность',
			//'company' => 'Заказчик',
			//'address' => 'Адрес',
			'azsclientaddress' => 'Адрес',
			'problem' => 'Проблема',
			'statusname' => 'Статус заявки',
			'mehanic_id' => 'Механик',
			'mehaniksname' => 'Механик',
			'begin_work_time' => 'Начало работы',
			'end_work_time' => 'Окончание работы',
			'description_work' => 'Описание',
			'materials' => 'Материалы',
			'recommendations' => 'Рекомендации',
			
		];
	}
	public function getMehaniks()
      {
          return $this->hasOne(Mehaniks::className(), ['id' => 'mehanic_id']);
      }

    public function getMehaniksname()
    {
      return $this->mehanic_id === null ? null : $this->mehaniks->name;
    }
	
	public function getImportanceid()
      {
          return $this->hasOne(Importance::className(), ['id' => 'importance']);
      }

    public function getImportancename()
    {
      return $this->importance === null ? null : $this->importanceid->name;
    }
	
	public function getAzsclientid()
      {
          return $this->hasOne(Azsclient::className(), ['id' => 'address']);
      }

    public function getAzsclientaddress()
    {
      return $this->address === null ? null : $this->azsclientid->address;
    }
	
	public function getAzsclientcompany()
    {
      return $this->address === null ? null : $this->azsclientid->company;
    }
	
	
	public function getStatusid()
      {
          return $this->hasOne(Status::className(), ['id' => 'status']);
      }
	  
	  public function getStatusname()
    {
      return $this->status === null ? null : $this->statusid->name;
    }
	
	
	
	
}