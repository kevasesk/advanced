<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "translations".
 *
 * @property integer $id
 * @property integer $id_object
 * @property integer $id_lang
 * @property string $field
 * @property string $value
 */
class Translations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'translations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_object', 'id_lang'], 'integer'],
            [['field', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_object' => 'Id Object',
            'id_lang' => 'Id Lang',
            'field' => 'Field',
            'value' => 'Value',
        ];
    }
}
