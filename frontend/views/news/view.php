<?php
use common\widgets\DateFormat;
?><div class="container clearfix">
    <div class="txt-holder pull-left">
        <span class="dating">
            <?php
                echo DateFormat::widget([
                    'date' =>$one_news->date,
                    'lang'=>'uk',
                    'style'=>'line'
                ]);
            ?>
        </span>
        <span class="naming"><?=$one_news->title?></span>

        <p><?=$one_news->content?></p>

    </div>
    <div class="other-news pull-left">
        <?php foreach ($all_news as $one):?>
            <div class="block">
                <span class="dating">
                    <?php echo DateFormat::widget([
                        'date' =>$one->date,
                        'lang'=>'uk',
                        'style'=>'line'
                    ]);?>
<!--                    19 мая 2016 года-->
                </span>
                <a href="/news/view?id=<?=$one->id?>" class="news-ref"><?=$one->title?></a>
                <p><?=$one->short?></p>
            </div>
        <?php endforeach;?>

    </div>
</div>
</div>