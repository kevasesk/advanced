<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MenuItems */
/* @var $form yii\widgets\ActiveForm */
$icons=array(
    'icon-user-female',
    'icon-user-follow',
    'icon-user-following',
    'icon-user-unfollow',
    'icon-trophy',
    'icon-screen-smartphone',
    'icon-screen-desktop',
    'icon-plane',
    'icon-notebook',
    'icon-moustache',
    'icon-mouse',
    'icon-magnet',
    'icon-energy',
    'icon-emoticon-smile',
    'icon-disc',
    'icon-cursor-move',
    'icon-crop',
    'icon-credit-card',
    'icon-chemistry',
    'icon-user',
    'icon-speedometer',
    'icon-social-youtube',
    'icon-social-twitter',
    'icon-social-tumblr',
    'icon-social-facebook',
    'icon-social-dropbox',
    'icon-social-dribbble',
    'icon-shield',
    'icon-screen-tablet',
    'icon-magic-wand',
    'icon-hourglass',
    'icon-graduation',
    'icon-ghost',
    'icon-game-controller',
    'icon-fire',
    'icon-eyeglasses',
    'icon-envelope-open',
    'icon-envelope-letter',
    'icon-bell',
    'icon-badge',
    'icon-anchor',
    'icon-wallet',
    'icon-vector',
    'icon-speech',
    'icon-puzzle',
    'icon-printer',
    'icon-present',
    'icon-playlist',
    'icon-pin',
    'icon-picture',
    'icon-map',
    'icon-layers',
    'icon-handbag',
    'icon-globe-alt',
    'icon-globe',
    'icon-frame',
    'icon-folder-alt',
    'icon-film',
    'icon-feed',
    'icon-earphones-alt',
    'icon-earphones',
    'icon-drop',
    'icon-drawer',
    'icon-docs',
    'icon-directions',
    'icon-direction',
    'icon-diamond',
    'icon-cup',
    'icon-compass',
    'icon-call-out',
    'icon-call-in',
    'icon-call-end',
    'icon-calculator',
    'icon-bubbles',
    'icon-briefcase',
    'icon-book-open',
    'icon-basket-loaded',
    'icon-basket',
    'icon-bag',
    'icon-action-undo',
    'icon-action-redo',
    'icon-wrench',
    'icon-umbrella',
    'icon-trash',
    'icon-tag',
    'icon-support',
    'icon-size-fullscreen',
    'icon-size-actual',
    'icon-shuffle',
    'icon-share-alt',
    'icon-share',
    'icon-rocket',
    'icon-question',
    'icon-pie-chart',
    'icon-pencil',
    'icon-note',
    'icon-music-tone-alt',
    'icon-music-tone',
    'icon-microphone',
    'icon-loop',
    'icon-logout',
    'icon-login',
    'icon-list',
    'icon-like',
    'icon-home',
    'icon-grid',
    'icon-graph',
    'icon-equalizer',
    'icon-dislike',
    'icon-cursor',
    'icon-control-start',
    'icon-control-rewind',
    'icon-control-play',
    'icon-control-pause',
    'icon-control-forward',
    'icon-control-end',
    'icon-calendar',
    'icon-bulb',
    'icon-bar-chart',
    'icon-arrow-up',
    'icon-arrow-right',
    'icon-arrow-left',
    'icon-arrow-down',
    'icon-ban',
    'icon-bubble',
    'icon-camcorder',
    'icon-camera',
    'icon-check',
    'icon-clock',
    'icon-close',
    'icon-cloud-download',
    'icon-cloud-upload',
    'icon-doc',
    'icon-envelope',
    'icon-eye',
    'icon-flag',
    'icon-folder',
    'icon-heart',
    'icon-info',
    'icon-key',
    'icon-link',
    'icon-lock',
    'icon-lock-open',
    'icon-magnifier',
    'icon-magnifier-add',
    'icon-magnifier-remove',
    'icon-paper-clip',
    'icon-paper-plane',
    'icon-plus',
    'icon-pointer',
    'icon-power',
    'icon-refresh',
    'icon-reload',
    'icon-settings',
    'icon-star',
    'icon-symbol-female',
    'icon-symbol-male',
    'icon-target',
    'icon-volume-1',
    'icon-volume-2',
    'icon-volume-off',
    'icon-users'
);
?>


<?php
    $form = ActiveForm::begin([
        'id' => 'menu-form',
        'options' => ['class' => 'form-horizontal'],
    ]) ?>
<select name="MenuForm[icon]" class="dropdown">
    <?php foreach ($icons as $icon):?>
        <option value="<?=$icon;?>"><?=$icon;?></option>
    <?php endforeach;?>
</select>

    <?= $form->field($menu, 'title') ?>
    <?= $form->field($menu, 'url') ?>



    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Create/update', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end() ?>
