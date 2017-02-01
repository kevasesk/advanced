<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Directiories */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Directiories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content:ntext',
            'content_ru:ntext',
            'id_employee',
            'icon',
            [
                'attribute'=>'icon',
                'format' => ['image'],
                'value'=>$model->icon,
            ],

        ],
    ]) ?>

</div>
