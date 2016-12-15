<?php
use yii\helpers\Url;

?>

<?php foreach ($directions as $row) : ?>
    <div class="flexible">
        <?php foreach ($row as $key => $dir) : ?>
            <div class="flexible-columns">
                <div class="<?php if($key==1)echo 'correct';?>">
                    <img class="pull-left" src="<?php echo $dir['icon'];?>" alt="icon" width="60" height="60">
                    <a href="one-direction.html#tab<?= $dir['id']?>" title="International commercial arbitration"><?= $dir['title']?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
