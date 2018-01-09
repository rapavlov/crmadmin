<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "azsclient".
 *
 * @property integer $id
 * @property string $address
 * @property string $company
 * @property string $city
 */
class Azsclient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'azsclient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address', 'company', 'city'], 'required'],
            [['address', 'company', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'company' => 'Company',
            'city' => 'City',
        ];
    }
}
