<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() //class="<?=$this->params['bodyClass'];?>
</head>
<body>
<header>
    <div class="holder clearfix">
        <a href="/" class="logo pull-left"><img src="/images/logo-sm.png" width="73" height="26" alt="Peregrin Capital Group"></a>
        <span class="tagline pull-left">Your protection and comfort<br>during legal proceedings</span>
        <a href="#menu"><button class="hamburger">&#9776;</button></a>
        <button class="cross">&#735;</button>
    </div>
</header>
