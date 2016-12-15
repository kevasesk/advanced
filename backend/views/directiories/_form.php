<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model common\models\Directiories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directiories-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php //echo  $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        //'language' => 'eng',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>



    <?php
         echo  $form->field($model, 'id_employee')->dropDownList($employees);
    ?>

    icon:
    <?= $form->field($model, "icon")->hiddenInput()->label(false) ?>
    <?php echo Html::img('/uploads/directiories/'.$model->icon); ?>
    <?php echo  $form->field($upload, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
