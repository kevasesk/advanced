<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_items".
 *
 * @property integer $id
 * @property integer $index
 * @property string $field
 * @property string $value
 * @property integer $lang_id
 */
class MenuItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['index', 'lang_id'], 'integer'],
            [['value'], 'string'],
            [['field'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'index' => 'Index',
            'field' => 'Field',
            'value' => 'Value',
            'lang_id' => 'Lang ID',
        ];
    }
}
