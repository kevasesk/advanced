<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'shortext')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'direction_text')->textarea(['rows' => 6]) ?>

    image:
    <?= $form->field($model, "image")->hiddenInput()->label(false) ?>
    <?php echo Html::img($model->image); ?>
    <?= $form->field($upload, 'imageFile')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
