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

<!--        <div class="block">-->
<!--            <span class="dating">5 мая 2016 года</span>-->
<!--            <a href="one-news-5-05-2016.html" class="news-ref">Захист гідності, честі та ділової репутації фізичних осіб, які є публічними особами</a>-->
<!--            <p>Чинна Конституція України передбачає, що людина, її життя і здоров'я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.</p>-->
<!--        </div>-->
<!--        <div class="block">-->
<!--            <span class="dating">28 апреля 2016 года</span>-->
<!--            <a href="one-news-28-04-2016.html" class="news-ref">Вивезення та ввіз творів мистецтва через кордон України</a>-->
<!--            <p>Термін оформлення документів для ввезення творів мистецтва в Україну: близько 2-х днів, вартість залежить від задекларованої вартості твору мистецтва.</p>-->
<!--        </div>-->
<!--        <div class="block">-->
<!--            <a href="news.html" class="news-ref">Все новости</a>-->
<!--        </div>-->
    </div>
</div>
</div>