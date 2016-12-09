<?php

namespace app\models;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::$app->basePath . "/web/uploads/" . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return [
                'upload'=>true,
                'fileName'=>$this->imageFile->baseName . '.' . $this->imageFile->extension,
            ];
        } else {
            return false;
        }
    }
}
?>
