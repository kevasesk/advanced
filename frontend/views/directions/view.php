<?php $this->registerJsFile('/js/big-tabs.js', ['depends'=>'frontend\assets\AppAsset']);?>
<div class="clearfix" id="tabs">
    <div class="bg-holder"><span>Блок, созданный специально для фона tabs. Ничего содержать не должен</span></div>
    <div class="tabset-holder" id="tabset-holder">
        <ul class="tabset" id="tabset">
            <?php foreach ($all_directions as $key => $direction):?>
                <li>
                    <a href="#tab<?=$direction->id?>">
                        <div class="list clearfix">
                            <img src="<?=$direction->icon?>" width="70" height="70" alt="icon01" class="icon-tabs pull-left">
                            <span class="two-lines"><?=$direction->title?></span>
                        </div>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php foreach ($all_directions as $direction):?>
        <div class="tab-content" id="tab<?=$direction->id?>">
            <div class="tab-holder border">
                <span class="naming"><?=$direction->title?></span>
                <?=$direction->content?>
            </div>
            <div class="tab-holder clearfix">
                <span class="title">Practicing consultants</span>
                <img src="<?=$direction->employee->image?>" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
                <a href="/employees/index#tab<?=$direction->employee->id?>"><span class="curator-name naming"><?=$direction->employee->name?></span></a>
                <?=$direction->employee->direction_text?>
            </div>
        </div>
    <?php endforeach;?>
    <!--
    <div class="tab-content" id="tab2">
        <div class="tab-holder border">
            <span class="naming">Меdiation and reconciliation of the parties</span>
            <p>Mediation and reconciliation often offer the best ways of&nbsp;solving conflicts. They are less formalized, more flexible, totally discreet and very quick in&nbsp;terms of&nbsp;the time spent on&nbsp;resolving the dispute. It&nbsp;is&nbsp;often the case when after mediation the parties will continue working together and maintain contacts (both personal and professional), and they may even reach a&nbsp;new level.</p>
            <span class="listname">In&nbsp;order to&nbsp;achieve the necessary result and comfort level for the Client the lawyers from Peregrin Capital Group will:</span>
            <ul class="dirlist">
                <li>organize and hold the negotiation process;</li>
                <li>establish contact between the parties to the conflict and find the way out of the conflict that will be optimal for the parties;</li>
                <li>draft legal documents for the peaceful settlement by the parties;</li>
                <li>carry out the legal follow up in recognizing and approving of the peaceful settlement agreements with the relevant institutions, including courts, that handle the dispute that has been settled through mediation.</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img06.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab5"><span class="curator-name naming">Olena<br>Ustimenko</span></a>
        </div>
    </div>
    <div class="tab-content" id="tab3">
        <div class="tab-holder border">
            <span class="naming">Меdical and pharmaceutical law</span>
            <p>Practicing law in&nbsp;the field of&nbsp;medicine and pharmaceutics has special requirements in&nbsp;terms of&nbsp;the necessary specialized knowledge and the peculiarity of&nbsp;the matter. Our consultants engaged in&nbsp;this area have over 15&nbsp;years of&nbsp;experience in&nbsp;practicing medical law, have published research papers on&nbsp;the relevant subjects and are recognized as&nbsp;expert specialists.</p>
            <p>Our main task is&nbsp;not only to&nbsp;secure the favorable resolution of&nbsp;the dispute, we&nbsp;aim at&nbsp;providing our Clients with a&nbsp;comprehensive approach to&nbsp;any individual case or&nbsp;situation as&nbsp;a&nbsp;means of&nbsp;avoiding similar undesirable incidents in&nbsp;the future.</p>
            <p>Medical malpractice, iatrogenesis, mechanisms for protecting human rights in&nbsp;the field of&nbsp;health care, boundaries for legal liability of&nbsp;heal care professionals, legal aspects of&nbsp;reproductive technologies, donor-related issues, telemedicine, protection of&nbsp;innovations in&nbsp;pharmaceutics, issues related to&nbsp;pharmaceutical security and care as&nbsp;well as&nbsp;many other matters are within our expertise.</p>
            <p>Furthermore, our consultants hold regular pro bono seminars for medical staff in&nbsp;various health care institutions and members of&nbsp;medical associations.</p>
            <span class="listname">Peregrin Capital Group has the best specialists in&nbsp;the field of&nbsp;medical and pharmaceutical law to&nbsp;allow for the wide variety of&nbsp;services for our Clients, including:</span>
            <ul class="dirlist">
                <li>applying for and obtaining licenses and authorization documents;</li>
                <li>legal support and follow up on the accreditation of health care institutions;</li>
                <li>legal support and follow up on the accreditation of health care institutions of all types of ownership;</li>
                <li>the development of the procedures for processing personal information in health care institutions of all types of ownership;</li>
                <li>comprehensive protection of rights in terms of processing medical information;</li>
                <li>comprehensive protection of rights when personal non-property rights are violated;</li>
                <li>comprehensive protection of the patient's rights;</li>
                <li>legal support and follow up of procurement and import of medical and diagnostic equipment with the subsequent certification;</li>
                <li>development of legal documents, including contractual documents, to work with patients;</li>
                <li>legal support and follow up for clinical studies;</li>
                <li>registration and support in the operation of a cosmetology enterprise;</li>
                <li>registration and licensing of pharmaceuticals and cosmetics;</li>
                <li>development and drafting the necessary set of documents for running a pharmaceutical company;</li>
                <li>comprehensive follow up and support in matters involving intellectual property objects in pharmaceutical business and protection of rights on intellectual property objects;</li>
                <li>comprehensive support and follow up in matters involving government procurement of medications;</li>
                <li>consultancy and drafting of legal conclusions on individual legal matters involving health care, including pharmaceutics;</li>
                <li>full legal support and follow up on matters involving the employment of foreign specialists;</li>
                <li>legal support and advice in drafting statutory documents of private health care institutions;</li>
                <li>representation of interests in court disputes as to the quality of the provided health care assistance and health care services;</li>
                <li>preparing analytical material in the field of health care, including pharmaceutics;</li>
                <li>pre-trial settlement of disputes between the subjects involved in medical legal relationships.</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img04.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab3"><span class="curator-name naming">Iryna<br>Seniuta</span></a>
        </div>
    </div>
    <div class="tab-content" id="tab4">
        <div class="tab-holder border">
            <span class="naming">Social benefits law</span>
            <p>The practice of&nbsp;social benefits law deals with resolving social welfare issues and consists of&nbsp;providing consultations on&nbsp;the matters involving retirement benefits, free health care assistance and provision of&nbsp;free medications, legal support and follow up&nbsp;with obtaining disability documents, contesting decisions of&nbsp;the state bodies on&nbsp;the amount of&nbsp;the due social and retirement benefits, administration of&nbsp;entitlements and public utility subsidies, legal aid for refugees, administration of&nbsp;documents to&nbsp;receive the status of&nbsp;a&nbsp;veteran of&nbsp;war or&nbsp;a&nbsp;combatant.</p>
            <p>The lawyers engaged in&nbsp;this field are involved in&nbsp;drafting relevant legislations, cooperate with specialized international organizations, are ILO experts.</p>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img01.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab6"><span class="curator-name naming">Mikhailo<br>Shumilo</span></a>
        </div>
        <br><br><br><br>
    </div>
    <div class="tab-content" id="tab5">
        <div class="tab-holder border">
            <span class="naming">Tax disputes</span>
            <p>While the situation with the tax legislation in&nbsp;the country remains unstable professional lawyers at&nbsp;Peregrin Capital Group are ready to&nbsp;offer consultations on&nbsp;taxation of&nbsp;individuals and legal entities, legal advice and follow up&nbsp;with inspections by&nbsp;tax agencies, drafting analytical notes on&nbsp;minimizing taxation in&nbsp;you entrepreneurial operations, planning of&nbsp;intergroup transactions in&nbsp;entities with foreign partership as&nbsp;well as&nbsp;international tax planning, tax due diligence, development of&nbsp;investment projects, consultations on&nbsp;customs and excise duties, payment of&nbsp;dividends, interests and royalties, meeting the legislation requirements on&nbsp;transfer pricing, tax planning for residents and individual taxing of&nbsp;residents and non-residents.</p>
            <span class="listname">Lawyers at Peregrin Capital Group will also:</span>
            <ul class="dirlist">
                <li>assess and contest decisions of taxation agencies;</li>
                <li>analyze potential risks and chances for a favorable court verdict in tax disputes;</li>
                <li>draft response to queries from tax agencies;</li>
                <li>consult on the matters of contractual and corporate structuring and restructuring of businesses to achieve tax optimization, harmonize corporate taxation, avoid double taxing;</li>
                <li>provide legal defense in criminal cases involving charges of gross evasion of taxes and duties (mandatory fees).</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img05.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab4"><span class="curator-name naming">Yaroslav<br>Epifanov</span></a>
        </div>
    </div>
    <div class="tab-content" id="tab6">
        <div class="tab-holder border">
            <span class="naming">Court practice</span>
            <p>Our team is&nbsp;a&nbsp;group of&nbsp;lawyers and experts of&nbsp;an&nbsp;international level, professionals in&nbsp;the field of&nbsp;civil, economic, administrative and criminal law who offer effective strategies with a&nbsp;tailored and customized approach to&nbsp;every individual case.</p>
            <p>Analytical skills, the ability to&nbsp;develop the right strategy in&nbsp;the case paired with extensive experience gained in&nbsp;day-to-day court practices constitute the very key element to&nbsp;solve even the most complicated and sophisticated challenge that our Clients bring to&nbsp;us. Our team&rsquo;s court practice is&nbsp;focused on&nbsp;securing our clients with fast and favorable resolutions of&nbsp;their cases.</p>
            <p>Our court practices comprise a legal examination of a case and development of optimal variants to resolve the issue and satisfy the Client, we design the defense strategy, offer a pre-trial support and follow up on the case, representation of the Client's interests with the investigation agencies, institutions and organizations, we represent our Clients in courts at all the trial stages, control the execution and enforcement of court orders and verdicts, take measures to give effect to the court's decision, prepare all the necessary procedural documents, including lawsuits, motions, responses to lawsuits, appeals and cassations, drafting legal expert conclusions on the option of defending the Client's interests in courts of other states, international court institutions, international government and non-government organizations, consultations and on-site visits by our lawyers 24/7, daily follow up with the case.</p>
            <span class="listname">Court practices section consists of:</span>
            <ul class="dirlist">
                <li>legal examination into the case and development of optimal variants to satisfy the Client in the resolution of the matter in question; </li>
                <li>development of a defense strategy;</li>
                <li>pre-trial support and follow up with the case, representation of the Client's interests with the investigation agencies, institutions and organizations;</li>
                <li>representation of the Clients' interests in courts at all the trial stages;</li>
                <li>control over the execution and enforcement of court orders and verdicts;</li>
                <li>measures to give effect to the court's decisions;</li>
                <li>preparation of all the necessary procedural documents, including lawsuits, motions, responses to lawsuits, appeals and cassations;</li>
                <li>drafting legal expert conclusions on the option of defending the Client's interests in courts of other states, international court institutions, international government and non-government organizations;</li>
                <li>consultations and on-site visits by our lawyers 24/7;</li>
                <li>daily follow up with the case.</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img03.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab2"><span class="curator-name naming">Stanislav<br>Borisov</span></a>
        </div>
    </div>
    <div class="tab-content" id="tab7">
        <div class="tab-holder border">
            <span class="naming">Banking law, search and return of assets</span>
            <span class="listname">Disputes and conflicts in&nbsp;banking, as&nbsp;well as&nbsp;the generally complicated situations in&nbsp;credit relationships sphere result in&nbsp;the growing number of&nbsp;attachments and foreclosures against individuals and legal entities, there are more and more cases when banks and lending institutions fail to&nbsp;return deposits, cases of&nbsp;illegal increase of&nbsp;interest rates or&nbsp;fines on&nbsp;credit liabilities or&nbsp;the increase of&nbsp;the amount of&nbsp;the principal debt. Search for assets in&nbsp;various jurisdictions, the decision on&nbsp;the strategy of&nbsp;filing lawsuits, the efficient measures to&nbsp;ensure their seizure. Qualified lawyers from Peregrin Capital Group are focused on&nbsp;getting verdicts in&nbsp;the Client&rsquo;s favor in&nbsp;such cases&nbsp;as:</span>
            <ul class="dirlist">
                <li>assistance in concluding credit and deposit agreements, collateral agreements, trust agreements, transition of debt or change of the debtor;</li>
                <li>pretrial settlement of disputes;</li>
                <li>refinancing and debt restructuring;</li>
                <li>reviewing and reclaiming the illegally accrued interest and fines on a credit agreement;</li>
                <li>representing interests in courts of all instances;</li>
                <li>legal support and follow up on the execution of court decisions;</li>
                <li>assistance in the search for and reclaiming of assets;</li>
                <li>comprehensive protection of the client's rights in banking services.</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img07.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab7"><span class="curator-name naming">Yuri<br>Zinchenko</span></a>
        </div>
    </div>
    <div class="tab-content" id="tab8">
        <div class="tab-holder border">
            <span class="naming">Protecting honor, dignity, and business reputation</span>
            <span class="listname">An&nbsp;individual&rsquo;s honor and dignity, as&nbsp;well as&nbsp;an&nbsp;individual&rsquo;s or&nbsp;company&rsquo;s business reputation are intrinsically connected with the legal rights to&nbsp;protection thereof, as&nbsp;their infringement or&nbsp;encroachments on&nbsp;them result in&nbsp;the loss of&nbsp;the status in&nbsp;dealings with counteragents, increased economic risks and costs. The team of&nbsp;professional lawyers at&nbsp;Peregrin Capital Group are ready to&nbsp;offer you legal advice, conduct legal examination, offer court protection and mediation in&nbsp;this area through:</span>
            <ul class="dirlist">
                <li>the protection of individuals' and companies' rights in this category of cases in state and other bodies, enterprises, agencies and organizations of all types of ownership;</li>
                <li>refuting the inaccurate information and protecting the honor, dignity and business reputation from any encroachments by individuals and companies;</li>
                <li>protecting honor, dignity and business reputation in Ukrainian courts of all instances, as well as in foreign courts;</li>
                <li>recourse of tangible and moral damages from the dissemination of inaccurate information.</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img03.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab2"><span class="curator-name naming">Stanislav<br>Borisov</span></a>
        </div>
    </div>
    <div class="tab-content" id="tab9">
        <div class="tab-holder border">
            <span class="naming">Cooperation with state government and local authorities</span>
            <p>Experts from Peregrin Capital Group are ready to&nbsp;provide you with support in&nbsp;state and private partnership relationships, offer a&nbsp;series of&nbsp;services to&nbsp;develop communications both inside the company, between its departments (PR, Marketing, Information and Analysis Department, others), and with external actors, to&nbsp;monitor tha acivity of&nbsp;the state agencies, mass media, to&nbsp;develop cooperation with the trade associations in&nbsp;the relevant areas, to&nbsp;participate in&nbsp;following up&nbsp;on&nbsp;the projects and the work of&nbsp;consultation councils with local government bodies.</p>
            <span class="listname">The team of Peregrin Capital Group will help you in dealing with the following problem areas:</span>
            <ul class="dirlist">
                <li>support in and follow up on investment projects;</li>
                <li>assistance and participation in state and private partnership projects;</li>
                <li>expert assessments;</li>
                <li>prevention of any manipulations with sociological survey results;</li>
                <li>participation in social projects, charity, presentation of the company's activity as socially responsible;</li>
                <li>removal of reputation and corruption risks.</li>
            </ul>
        </div>
        <div class="tab-holder clearfix">
            <span class="title">Practicing consultants</span>
            <img src="/images/company-img07.jpg" width="100" height="100" alt="Curator" class="pull-left curator-img" style="padding-right:30px; padding-bottom:50px">
            <a href="employees.html#tab7"><span class="curator-name naming">Yuri<br>Zinchenko</span></a>
        </div>
    </div>
    -->
</div>