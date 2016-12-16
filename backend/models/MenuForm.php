<?php
namespace backend\models;

class MenuForm extends \yii\base\Model
{
    public $icon;
    public $title;
    public $url;

    public function rules()
    {
        return [
            // define validation rules here
        ];
    }
}

?>
