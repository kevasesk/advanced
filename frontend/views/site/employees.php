<?php $this->registerJsFile('/js/big-tabs.js', ['depends'=>'frontend\assets\AppAsset']);?>
<div class="tab-container">
    <div class="clearfix" id="tabs">
        <div class="bg-holder"><span>Блок, созданный специально для фона tabs. Ничего содержать не должен</span></div>
        <div class="tabset-holder" id="tabset-holder">
            <ul class="tabset" id="tabset">

                <?php foreach ($employees as $employee):?>
                    <li>
                        <a href="#tab<?=$employee['id'];?>">
                            <div class="list clearfix">
                                <img src="<?php echo $employee['image'];?>" width="70" height="70" alt="icon0<?=$employee['id'];?>" class="icon-tabs pull-left">
                                <span class="two-lines"><?=$employee['name'];?></span>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php foreach ($employees as $employee):?>
            <div class="tab-content" id="tab<?=$employee['id'];?>">
                <div class="tab-holder" id="tab-holder">
                    <img src="<?=$employee['image'];?>" width="395" height="284" alt="img01" class="photo">
                    <span class="naming"><?=$employee['name'];?></span>
                    <p><?=$employee['text'];?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>