<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DirectioriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Directiories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Directiories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            'id_employee',
            array(
                'value'=>function($data) { return $data->getEmployee()->name; },
                'attribute'=>'ID_employee',
                'label'=> "Name Employee",
            ),
            'icon',
            array(
                'format' => 'image',
                'value'=>function($data) { return $data->icon; },
                'attribute'=>'icon',
            ),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


