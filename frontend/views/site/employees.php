<?php $this->registerJsFile('/js/big-tabs.js', ['depends'=>'frontend\assets\AppAsset']);?>
<div class="tab-container">
    <div class="clearfix" id="tabs">
        <div class="bg-holder"><span>Блок, созданный специально для фона tabs. Ничего содержать не должен</span></div>
        <div class="tabset-holder" id="tabset-holder">
            <ul class="tabset" id="tabset">
                <li>
                    <a href="#tab1" class="active">
                        <div class="list clearfix">
                            <img src="/images/company-img02.jpg" width="70" height="70" alt="icon01" class="icon-tabs pull-left">
                            <span class="two-lines">Iryna<br>Venediktova</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab2">
                        <div class="list clearfix">
                            <img src="/images/company-img03.jpg" width="70" height="70" alt="icon02" class="icon-tabs pull-left">
                            <span class="two-lines">Stanislav<br>Borisov</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab3">
                        <div class="list clearfix">
                            <img src="/images/company-img04.jpg" width="70" height="70" alt="icon03" class="icon-tabs pull-left">
                            <span class="two-lines">Iryna<br>Seniuta</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab4">
                        <div class="list clearfix">
                            <img src="/images/company-img05.jpg" width="70" height="70" alt="icon04" class="icon-tabs pull-left">
                            <span class="two-lines">Yaroslav<br>Epifanov</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab5">
                        <div class="list clearfix">
                            <img src="/images/company-img06.jpg" width="70" height="70" alt="icon05" class="icon-tabs pull-left">
                            <span class="two-lines">Olena<br>Ustimenko</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab6">
                        <div class="list clearfix">
                            <img src="/images/company-img01.jpg" width="70" height="70" alt="icon06" class="icon-tabs pull-left">
                            <span class="two-lines">Mikhailo <br>Shumilo</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#tab7">
                        <div class="list clearfix">
                            <img src="/images/company-img07.jpg" width="70" height="70" alt="icon06" class="icon-tabs pull-left">
                            <span class="two-lines">Yuri<br>Zinchenko</span>
                        </div>
                    </a>
                </li>
                <?php foreach ($employees as $employee):?>

                    <li>
                        <a href="#tab<?=$employee->id;?>">
                            <div class="list clearfix">
                                <img src="/images/company-img07.jpg" width="70" height="70" alt="icon0<?=$employee->id;?>" class="icon-tabs pull-left">
                                <span class="two-lines"><?=$employee->name;?></span>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="tab-content" id="tab1">
            <div class="tab-holder" id="tab-holder">
                <img src="/images/employees-img01.jpg" width="395" height="284" alt="img01" class="photo">
                <span class="naming">Iryna Venediktova</span>
                <p>Consultant coordinating and following up&nbsp;on&nbsp;the international commercial arbitration practice. Mrs&nbsp;Venediktova is&nbsp;Head of&nbsp;the Department for Civil Law Disciplines at&nbsp;V.&nbsp;N.&nbsp;Karazin Kharkiv National University, Doctor of&nbsp;Letters in&nbsp;Law, Full Professor, arbitrator at&nbsp;the International Commercial Arbitration Court and the Maritime Arbitration Commission at&nbsp;the Ukrainian Chamber of&nbsp;Commerce and Industry.</p>
                <p>She is&nbsp;experienced in&nbsp;following up&nbsp;on&nbsp;the investment funds, preparing projects for legislative and sublegislative statutory acts, solving corporate conflicts, conducting legal audits and restructuring businesses. Took a course in International Commercial Arbitration at Chartered Institute of Arbitrators.</p>
                <p>Judge of&nbsp;the standing arbitration court at&nbsp;the Foundation of&nbsp;Medical Law and Bioethics of&nbsp;Ukraine All-Ukrainian Public Organization. Vice-President of&nbsp;the Association of&nbsp;Cosmetologists and Aromologists, Vice-President of&nbsp;the Foundation of&nbsp;Medical Law and Bioethics, holds membership on&nbsp;CIArb and UBA (Ukrainian Bar Association).</p>
                <p>Author of over 150 theoretical and practical research papers.<br>Languages – Ukrainian, English, Russian.</p>
                <p>Email: <a href="mailto:venediktova@peregrin-group.com">venediktova@peregrin-group.com</a></p>
            </div>
        </div>
        <div class="tab-content" id="tab2">
            <div class="tab-holder">
                <img src="/images/employees-img02.jpg" width="395" height="284" alt="img02" class="photo">
                <span class="naming">Stanislav Borisov</span>
                <p>Attorney, consultant coordinating and following up&nbsp;the court practice of&nbsp;the firm. Mr&nbsp;Borisov started his professional career as&nbsp;a&nbsp;SSU investigator specializing in&nbsp;cyber crime.</p>
                <p>He&nbsp;has been practicing law since 2009, and since 2010&nbsp;he has been actively involved as&nbsp;a&nbsp;defense lawyer. Mr&nbsp;Borisov is&nbsp;set apart as&nbsp;a&nbsp;professional by&nbsp;his success rate in&nbsp;civil, economic, administrative, and criminal cases.</p>
                <p>He&nbsp;has extensive experience in&nbsp;contractual relationships sphere, following up&nbsp;business projects, contesting ulawful actions and decisions by&nbsp;state government and law enforcement bodies. <br> Languages&nbsp– Ukrainian, English, Russian.
                <p>Email: <a href="mailto:borisov@peregrin-group.com">borisov@peregrin-group.com</a></p>
            </div>
        </div>
        <div class="tab-content" id="tab3">
            <div class="tab-holder">
                <img src="/images/employees-img03.jpg" width="395" height="284" alt="img01" class="photo">
                <span class="naming">Iryna Seniuta</span>
                <p>Defense lawyer, consultant, coordinating and following up&nbsp;the medical law practice. Ms&nbsp;Seniuta is&nbsp;Head of&nbsp;the Medical Law Department at&nbsp;the Postgraduate Learning Faculty of&nbsp;Danylo Halytsky Lviv National Medical University, with a&nbsp;PhD in&nbsp;Law.</p>
                <p>President of&nbsp;the Foundation of&nbsp;Medical Law and Bioethics of&nbsp;Ukraine All-Ukrainian Public Organization, member of&nbsp;the European Association of&nbsp;Health Law, chief judge on&nbsp;the standing arbitration court at&nbsp;the Foundation of&nbsp;Medical Law and Bioethics of&nbsp;Ukraine All-Ukrainian Public Organization, Board member of&nbsp;the Vidrodzhennia (Renaissance) International Foundation.</p>
                <p>Author of&nbsp;over 150 papers in&nbsp;the medical law sphere, co-author of&nbsp;drafts of&nbsp;the medical self-government laws, editor-in-chief of&nbsp;the &ldquo;Medical law&rdquo; journal. Took a&nbsp;professional course in&nbsp;Salzburg (Austria), Zagreb (Croatia), participant of&nbsp;the many scientific and practical events in&nbsp;the Ukraine as&nbsp;well as&nbsp;abroad. Head of&nbsp;the international projects in&nbsp;the medical law sphere in&nbsp;the collaboration with Open Society Foundation (New York, USA), USAID, Vidrodzhennia (Renaissance) International Foundation, ABA&nbsp;/ ROLI.</p>
                <p>Professional interests are focused on&nbsp;medical and pharmaceutical law, medical newtrality, human rights, alternative dispute resolution. <br>Languages&nbsp;&mdash; Ukrainian, English, Russian.</p>
                <p>Email: <a href="mailto:info@peregrin-group.com">info@peregrin-group.com</a></p>
            </div>
        </div>
        <div class="tab-content" id="tab4">
            <div class="tab-holder">
                <img src="/images/employees-img04.jpg" width="395" height="284" alt="img01" class="photo">
                <span class="naming">Yaroslav Epifanov</span>
                <p>Defense lawyer, consultant coordinating and following up&nbsp;the tax law and taxation optimization practices. Mr&nbsp;Epifanov has an&nbsp;extensive background in&nbsp;contesting decisions and actions of&nbsp;fiscal bodies in&nbsp;court. He&nbsp;is&nbsp;also professionally involved in&nbsp;the area of&nbsp;corporate law, has experience in&nbsp;drafting legislation on&nbsp;state registration of&nbsp;businesses.</p>
                <p>Mr&nbsp;Epifanov was head of&nbsp;the structural unit within the Department for Registration of&nbsp;Businesses under the Ministry of&nbsp;Justice of&nbsp;Ukraine, took a&nbsp;course of&nbsp;professional training of&nbsp;judges and completed an&nbsp;internship with the Department of&nbsp;Representing the Interests of&nbsp;Ukraine in&nbsp;International Courts at&nbsp;the Ministry of&nbsp;Justice of&nbsp;Ukraine.</p>
                <p>Member of&nbsp;the League of&nbsp;Ukrainian lawyers against corruption Public organization, participates in&nbsp;developing a&nbsp;start-up project called the System of&nbsp;tracking corrupt practices.<br>Languages&nbsp;– Ukrainian, English, Russian.</p>
                <p>Email: <a href="mailto:info@peregrin-group.com">info@peregrin-group.com</a></p>
            </div>
        </div>
        <div class="tab-content" id="tab5">
            <div class="tab-holder">
                <img src="/images/employees-img05.jpg" width="395" height="284" alt="img01" class="photo">
                <span class="naming">Olena Ustimenko</span>
                <p>Olena Ustimenko is&nbsp;a&nbsp;defense lawyer, consultant coordinating and following up&nbsp;the mediation and reconciliation practice. Ms&nbsp;Ustimenko has a&nbsp;degree of&nbsp;PhD in&nbsp;Law. She is&nbsp;an&nbsp;Associate Professor at&nbsp;the Department for Civil Law Disciplines of&nbsp;V.&nbsp;N.&nbsp;Karazin Kharkiv National University.</p>
                <p>She has a&nbsp;wide array of&nbsp;knowledge, skills and experience in&nbsp;solving corporate conflicts, representing parties in&nbsp;civil, economic, and administrative legal proceedings and dealing with state authorities.</p>
                <p>Ms&nbsp;Ustimenko took a&nbsp;course in&nbsp;Fundamental Mediation at&nbsp;Universit&auml;t Potsdam. Author of&nbsp;over 20&nbsp;theoretical and practical research papers.<br>Languages&nbsp;– Ukrainian, Russian.
                <p>Email: <a href="mailto:info@peregrin-group.com">info@peregrin-group.com</a></p>
            </div>
        </div>
        <div class="tab-content" id="tab6">
            <div class="tab-holder">
                <img src="/images/employees-img06.jpg" width="395" height="284" alt="img01" class="photo">
                <span class="naming">Mikhailo Shumilo</span>
                <p>Consultant, curator of&nbsp;the labor law and social benefits law practices. Mr&nbsp;Shumilo is&nbsp;Senior Researcher of&nbsp;the Civil, Labor and Entrepreneurial Law Department at&nbsp;V.&nbsp;M.&nbsp;Koretsky Institute of&nbsp;State and Law at&nbsp;the National Academy of&nbsp;Sciences of&nbsp;Ukraine, with a&nbsp;PhD in&nbsp;Law.</p>
                <p>He&nbsp;has experience in&nbsp;drafting legislation, is&nbsp;an&nbsp;expert member on&nbsp;the Working Group for Further Improvement of&nbsp;the Retirement Benefits System at&nbsp;the Ministry for Social Policy of&nbsp;Ukraine, prepares theoretical and practical examinations for specialized committee of&nbsp;the Verkhovna Rada, the Cabinet of&nbsp;Ministers of&nbsp;Ukraine, the Constitutional Court of&nbsp;Ukraine, the National Academy of&nbsp;Sciences of&nbsp;Ukraine.</p>
                <p>Guest speaker at&nbsp;various international conferences in&nbsp;Ukraine and abroad (Max Planck Institute for Social Law and Social Policy, Munich; Uniwersytet Gdański, Gdańsk). <br>Author of over 90 theoretical and practical research papers. <br>Languages&nbsp;– Ukrainian, Russian.</p>
                <p>Email: <a href="mailto:info@peregrin-group.com">info@peregrin-group.com</a></p>
            </div>
        </div>
        <div class="tab-content" id="tab7">
            <div class="tab-holder">
                <img src="/images/employees-img07.jpg" width="395" height="284" alt="img01" class="photo">
                <span class="naming">Yuri Zinchenko</span>
                <p>Consultant, coordinating and following up&nbsp;the banking law, search and return of&nbsp;assets practice who started his professional career as&nbsp;a&nbsp;legal consultant at&nbsp;the National Bank of&nbsp;Ukraine. Since 2004 he has been gaining experience, practicing law in administrative, economic and civil cases.</p>
                <p>PhD in&nbsp;Law, Assistant Professor at&nbsp;the Department for State Law Disciplines of&nbsp;V.&nbsp;N.&nbsp;Karazin Kharkiv National University</p>
                <p>Languages&nbsp;– Ukrainian, English, Russian.</p>
                <p>Email: <a href="mailto:zinchenko@peregrin-group.com">zinchenko@peregrin-group.com</a></p>
            </div>
        </div>
    </div>
</div>