<?php
use common\widgets\DateFormat;
?>
<div class="container">
    <span class="naming">News</span>


    <?php foreach ($news as $one):?>

        <div class="news-block clearfix border">
            <div class="date-holder clearfix pull-left">
                <?php echo DateFormat::widget([
                    'date' =>$one['date'],
                    'lang'=>'uk'
                ]);?>

            </div>

            <div class="news-holder pull-left">
                <a href="/news/view?id=<?=$one['id']?>" class="news-ref"><?=$one['title'];?></a>
                <p><?=$one['short'];?></p>
            </div>

        </div>
    <?php endforeach;?>

</div>