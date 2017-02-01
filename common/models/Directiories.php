<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "directiories".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $id_employee
 * @property string $icon
 */
class Directiories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directiories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['content_ru'], 'string'],
            [['id_employee'], 'integer'],
            [['title', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'content_ru' => 'Content YEA',
            'id_employee' => 'Id Employee',
            'icon' => 'Icon',
        ];
    }
    public function getEmployee()
    {
        return Employees::findOne($this->id_employee);
    }
}
