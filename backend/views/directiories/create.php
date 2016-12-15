<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Directiories */

$this->title = 'Create Directiories';
$this->params['breadcrumbs'][] = ['label' => 'Directiories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiories-create">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
        'upload'=>$upload,
        'employees'=>$employees
    ]) ?>

</div>


