<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mehaniks".
 *
 * @property integer $id
 * @property string $name
 * @property integer $is_work
 * @property string $coment
 */
class Mehaniks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mehaniks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'is_work', 'coment'], 'required'],
            [['is_work'], 'integer'],
            [['name', 'coment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_work' => 'Is Work',
            'coment' => 'Coment',
        ];
    }
}
