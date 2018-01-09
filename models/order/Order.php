<?php

namespace app\models\order;

class Order {
	public $id;
	public $data_create;
	public $importance;
	public $company;
	public $address;
	public $problem;
	public $mehanic_id;
	public $begin_work_time;
	public $end_work_time;
	public $description_work;
	public $materials;
	public $recommendations;
	
	public function __construct( )
	{
		
	}
	
}