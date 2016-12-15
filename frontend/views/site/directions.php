<?php
use common\widgets\FlexColumns;
?>
<div class="border">
    <div class="container">
        <span class="heading">Peregrin Capital Group law firm specializes in legal support and follow up of cases brought by individuals and corporate clients in the field of interacting with state government authorities, conducting investment projects, public-private partnership and international commercial arbitration </span>
    </div>
</div>

<div class="services border">
    <div class="container">
        <div class="services-top">
            <span class="naming">What we do </span>
            <span class="subnaming">Our specialized expertise</span>
        </div>
        <?= FlexColumns::widget(['directions' =>$directions]) ?>


        <div class="services-btm">
            <span class="naming">We deal with the following areas:</span>
            <div class="flexible">
                <div class="flexible-columns">
                    <div class="others">
                        <span class="glyph-item mega" data-js-prompt="&#xe005;" data-icon="" aria-hidden="true"></span>
                        <p>Legal and financial audit</p>
                    </div>
                    <div class="others">
                        <span class="glyph-item mega" data-js-prompt="&#xe05b;" data-icon="" aria-hidden="true"></span>
                        <p>Corporate law</p>
                    </div>
                </div>
                <div class="flexible-columns">
                    <div class="others">
                        <span class="glyph-item mega" data-js-prompt="&#xe096;" data-icon="" aria-hidden="true"></span>
                        <p>Commercial law</p>
                    </div>
                    <div class="others">
                        <span class="glyph-item mega" data-js-prompt="&#xe086;" data-icon="" aria-hidden="true"></span>
                        <p>Intellectual property law</p>
                    </div>
                </div>
                <div class="flexible-columns">
                    <div class="others">
                        <span class="glyph-item mega" data-js-prompt="&#xe005;" data-icon="" aria-hidden="true"></span>
                        <p>Land law</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
