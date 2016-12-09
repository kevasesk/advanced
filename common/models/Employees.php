<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property string $id
 * @property string $name
 * @property string $text
 * @property string $shortext
 * @property string $direction_text
 * @property string $image
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'shortext', 'direction_text'], 'required'],
            [['text', 'shortext', 'direction_text'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
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
            'text' => 'Text',
            'shortext' => 'Shortext',
            'direction_text' => 'Direction Text',
            'image' => 'Image',
        ];
    }
}
