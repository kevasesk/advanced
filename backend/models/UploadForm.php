<?php

namespace app\models;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use yii\helpers\Url;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload($model)
    {
        if(!is_dir(Url::to('@frontend/web/uploads/').$model->id))
            mkdir(Url::to('@frontend/web/uploads/').$model->id) ;
        $file=uniqid(). '.' . $this->imageFile->extension;
        if ($this->validate() && $this->imageFile!==null) {

            $this->imageFile->saveAs(Url::to('@frontend/web/uploads/').$model->id. "/" . $file);

            return [
                'upload' => true,
                'fileName' =>Url::to('@fronturl').'/uploads/'.$model->id. "/" . $file,
            ];

        } else {
            return false;
        }
    }
}
?>
