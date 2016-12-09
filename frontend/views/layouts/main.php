<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<?php $this->beginBody() ?>
<?php $this->beginContent('@app/views/layouts/header.php');$this->endContent(); ?>
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
</body>
</html>
<?php $this->endBody() ?>
<?php $this->endPage() ?>
