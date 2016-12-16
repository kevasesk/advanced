<?php $this->registerJsFile('/js/tabs.js', ['depends'=>'frontend\assets\AppAsset']);?>

<div class="border">
    <div class="intro container clearfix">
        <div class="industry pull-left clearfix">
            <img src="/images/company-img.jpg" width="430" height="270" alt="Office">
            <span class="naming">Areas </span>
            <div class="flexible">
                <ul>
                    <li><span class="list">Меdicine</span></li>
                    <li><span class="list">Pharmaceutics</span></li>
                    <li><span class="list">Cosmetology</span></li>
                </ul>
                <ul>
                    <li><span class="list">Real Estate</span></li>
                    <li><span class="list">Construction </span></li>
                    <li><span class="list">Industry</span></li>
                </ul>
                <ul>
                    <li><span class="list">Аrt market </span></li>
                    <li><span class="list">Media</span></li>
                    <li><span class="list">IT</span></li>
                </ul>
            </div>
        </div>
        <div class="practice-holder pull-right">
            <h2>Peregrin Capital Group</h2>
            <span class="tagline">Your protection and comfort<br>during legal proceedings</span>
            <div class="practice">
                <span class="naming">Practices</span>
                <ul class="practice-list">
                    <li>International commercial arbitration</li>
                    <li>Меdiation and reconciliation of the parties</li>
                    <li>Legal and financial audit</li>
                    <li>Меdical and pharmaceutical law</li>
                    <li>Social benefits law</li>
                    <li>Corporate law</li>
                    <li>Commercial law</li>
                    <li>Intellectual property law</li>
                    <li>Land law</li>
                    <li>Tax law</li>
                    <li>Court practice</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="border">
    <div class="about">
        <div class="container">
            <div class="txt-holder">
                <p>Peregrin Capital Group is&nbsp;a&nbsp;young firm on&nbsp;the legal market, created and continually developed by&nbsp;professionals with extensive practical experience, analytical expert skills, and the ability to&nbsp;deliver and work in&nbsp;a&nbsp;team, specialized knowledge, and academic degrees. This unique background has naturally grown into the desire to&nbsp;create a&nbsp;standout firm.<br>The principles upon which we&nbsp;build our work are:</p>
            </div>
            <div class="about-btm">
                <div class="table-block">
                    <div class="cell">
                        <span class="glyph-item about-item" data-js-prompt="&#xe003;" data-icon="" aria-hidden="true"></span>
                        <div class="cell-block">
                            <span class="name">Client’s comfort</span>
                            <p>Our job is&nbsp;to&nbsp;provide our clients with emotional comfort and confidence in&nbsp;order to&nbsp;focus on&nbsp;their favorite activity&nbsp;&mdash; building their business instead of&nbsp;being distracted by&nbsp;legalities</p>
                        </div>
                    </div>
                    <div class="cell">
                        <span class="glyph-item about-item" data-js-prompt="&#xe096;" data-icon="" aria-hidden="true"></span>
                        <div class="cell-block">
                            <span class="name">Roadmap for the case</span>
                            <p>We&nbsp;start working with our clients&rsquo; issues by&nbsp;outlining an&nbsp;itinerary in&nbsp;the legal field, suggesting various possible solutions to&nbsp;the tasks</p>
                        </div>
                    </div>
                    <div class="cell">
                        <span class="glyph-item about-item" data-js-prompt="&#xe02a;" data-icon="" aria-hidden="true"></span>
                        <div class="cell-block">
                            <span class="name">Minimization of&nbsp;the client&rsquo;s expenditures</span>
                            <p>Not only do&nbsp;we&nbsp;ensure to&nbsp;minimize the necessary actual expenditure of&nbsp;the client, but also to&nbsp;ensure sensible savings on&nbsp;legal fees, using the formula of&nbsp;&ldquo;adequate necessity and feasible sufficiency&rdquo;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-top">
                <div class="table-block">
                    <div class="cell">
                        <span class="glyph-item about-item" data-js-prompt="&#xe087;" data-icon="" aria-hidden="true"></span>
                        <div class="cell-block">
                            <span class="name">Involvement and adding the&nbsp;most value</span>
                            <p>We&nbsp;follow up&nbsp;on&nbsp;the case throughout all the stages of&nbsp;the trial process. We&nbsp;prefer handling legal tasks on&nbsp;the &ldquo;turnkey&rdquo; basis and are willing to&nbsp;join an&nbsp;ongoing project, if&nbsp;the client considers our involvement necessary</p>
                        </div>
                    </div>
                    <div class="cell">
                        <span class="glyph-item about-item" data-js-prompt="&#xe047;" data-icon="" aria-hidden="true"></span>
                        <div class="cell-block">
                            <span class="name">Feedback and aftermath</span>
                            <p>Our task is&nbsp;to&nbsp;quickly solve the legal problem we&nbsp;are facing while creating a&nbsp;high-quality product. It&nbsp;is&nbsp;important for&nbsp;us to&nbsp;not only solve the problem, but to&nbsp;create the atmosphere of&nbsp;trust, reliability, partnership and progress in&nbsp;our relationship with the client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border">
    <div class="curators container">
        <div class="curators-top">
            <span class="naming">Practicing consultants </span>
        </div>
        <div class="tabs">
            <ul class="tabset" id="tabset">
                <?php foreach ($employees as $key => $employee):?>
                    <li><a href="#tab<?=$employee['id'];?>" class="<?php if($key==0)echo "active";?>">
                            <img src="<?=$employee['image'];?>" width="89" height="89" alt="Curators" class="curators-img">
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
            <?php foreach ($employees as $employee):?>
                <div class="tab-content clearfix" id="tab<?=$employee['id']?>">
                    <div class="pull-left">
                        <span class="naming"><?=$employee['name']?></span>
                        <a href="/employees/#tab<?=$employee['id']?>">Go to the consultant’s page</a>
                    </div>
                    <div class="pull-right">
                        <p><?=$employee['shortext']?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<div class="border exp-holder">
    <div class="container">
        <div class="exp-btm">
            <div class="cell">
                <span class="name">Comprehensive approach to&nbsp;solving problems</span>
                <p>If&nbsp;necessary, specialists from different fields and even of&nbsp;different professions are invited to&nbsp;work on&nbsp;the project</p>
            </div>
            <div class="cell">
                <span class="name">Combination <br>of&nbsp;theory and&nbsp;practice</span>
                <p>Our consultants have PhDs and Doctors of&nbsp;Letters degrees in&nbsp;Law, they use analytical skills in&nbsp;solving all the legal issues without any exceptions</p>
            </div>
            <div class="cell">
                <span class="name">The use<br> of&nbsp;legal techniques</span>
                <p>We&nbsp;cooperate with the companies that implement innovative solutions for the existing processes along with introducing the latest&nbsp;IT trends and business administration solutions</p>
            </div>
        </div>
        <span class="conclusion">We do everything and a little more!</span>
    </div>
</div>

