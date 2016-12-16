<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Pjax;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php $this->beginContent('@app/views/layouts/header.php');$this->endContent(); ?>
<?php Pjax::begin(); ?>
<div class="<?=$this->params['bodyClass'];?>">
    <?php $this->beginContent('@app/views/layouts/menu.php');$this->endContent(); ?>

        <div class="main">
            <?= $content ?>
        <?php
            if($this->params['footer'])
            {
                $this->beginContent('@app/views/layouts/footer.php');$this->endContent();
            }
        ?>
        </div>
</div>
<?php $this->endBody() ?>
<?php Pjax::end(); ?>
<?php $this->endPage() ?>
