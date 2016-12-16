<?php
//use yii\widgets\Menu;
use common\widgets\MainMenu;

?>
<div class="main-menu" id="menu">


    <?php
    /*
    $menu= Menu::widget([
        'items' => [
            [
                'label' => 'About Us',
                'url' => ['site/about'],
                'template'=>"<a href='{url}'><span class=\"glyph-item menu-item icon-trophy\" data-js-prompt=\"&#xe04b;\" data-icon=\"\" aria-hidden=\"true\"></span>{label}</a>"
            ],
            ['label' => 'Key areas', 'url' => ['/directions'],
                'template'=>"<a href='{url}'><span class=\"glyph-item menu-item\" data-js-prompt=\"&#xe040;\" data-icon=\"\" aria-hidden=\"true\"></span>{label}</a>",
            ],
            ['label' => 'Our lawyers', 'url' => ['/employees'],
                'template'=>"<a href='{url}'><span class=\"glyph-item menu-item\" data-js-prompt=\"&#xe001;\" data-icon=\"\" aria-hidden=\"true\"></span>{label}</a>",
            ],
            ['label' => 'News', 'url' => ['news/'],
                'template'=>"<a href='{url}'><span class=\"glyph-item menu-item\" data-js-prompt=\"&#xe02c;\" data-icon=\"\" aria-hidden=\"true\"></span>{label}</a>",
            ],
            ['label' => 'Contacts', 'url' => ['site/contact'],
                'template'=>"<a href='{url}'><span class=\"glyph-item menu-item\" data-js-prompt=\"&#xe010;\" data-icon=\"\" aria-hidden=\"true\"></span>{label}</a>",
            ],
        ],
        'activeCssClass'=>'active',
        'options'=>[
            'class'=>'menu'
        ],
        'linkTemplate'=>'',
    ]);
    echo $menu
    */
    ?>
    <?= MainMenu::widget();?>
    <div class="btm">
        <div class="lang">
            <img src="/images/lang-en-hover.png" border="0" width="34" height="34" alt="en">
            <a href="/ua/index.html"><img src="/images/lang-ua.png" border="0" onmouseover="this.src='/images/lang-ua-hover.png'" onmouseout="this.src='/images/lang-ua.png'"  width="34" height="34" alt="ua"></a>
            <a href="/ru/index.html"><img src="/images/lang-ru.png" onmouseover="this.src='/images/lang-ru-hover.png'" onmouseout="this.src='/images/lang-ru.png'" width="34" height="34" alt="ru"></a>
        </div>
        <span class="copyright">© Peregrin Capital Group</span>
    </div>
</div>
<aside class="aside">
    <div class="aside-holder">
        <a href="/"><img class="logo" src="/images/logo.png" width="192" height="68" alt="Peregrin Capital Group"></a>
        <span class="tagline">Your protection and comfort<br>during legal proceedings</span>
        <?= MainMenu::widget();?>
        <footer class="footer">
            <div class="footer-holder">
                <div class="lang">
                    <img src="/images/lang-en-hover.png" border="0" width="34" height="34" alt="en">
                    <a href="/ua/index.html"><img src="/images/lang-ua.png" border="0" onmouseover="this.src='/images/lang-ua-hover.png'" onmouseout="this.src='/images/lang-ua.png'"  width="34" height="34" alt="ua"></a>
                    <a href="/ru/index.html"><img src="/images/lang-ru.png" onmouseover="this.src='/images/lang-ru-hover.png'" onmouseout="this.src='/images/lang-ru.png'" width="34" height="34" alt="ru"></a>
                </div>
                <span class="copyright">© Peregrin Capital Group</span>
            </div>
        </footer>
    </div>
</aside>