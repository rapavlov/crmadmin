<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dutymehaniks".
 *
 * @property integer $id
 * @property string $begin_duty
 * @property string $end_duty
 * @property integer $mehanik
 * @property string $comment
 */
class Dutymehaniks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dutymehaniks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['begin_duty', 'end_duty'], 'required'],
            [['begin_duty', 'end_duty'], 'safe'],
            [['mehanik'], 'integer'],
            [['comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'begin_duty' => 'Начало дежурства',
            'end_duty' => 'Окончание дежурства',
            'mehanik' => 'Механик',
            'comment' => 'Комментарий',
        ];
    }
    public function getMehaniks()
    {
        return $this->hasOne(Mehaniks::className(), ['id' => 'mehanik']);
    }

    public function getMehaniksname()
    {
        return $this->mehanik === null ? null : $this->mehaniks->name;
    }
}
