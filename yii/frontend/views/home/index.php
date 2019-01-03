<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<section class="section-1" id="section1_scroll">
    <div class="container">
        <div class="aside">
            <div class="row">
                <h1>01</h1>
            </div>
        </div>
        <div class="article">
            <div class="row revealator-slideup revealator-once">
                <div class="section_1_block">
                    <h1>Что умеем?</h1>
                </div>
                <div class="section_1_block">&nbsp;</div>
                <div class="section_1_block">
                    <a href="<?= Url::to(['services/index'])?>">Хочу знать больше <span class="fas fa-angle-right"></span></a>
                </div>
            </div>
            <div class="section_1_2">
                <div class="section_1_block_2 revealator-slideup revealator-once">
                    <div class="skills">
                        <img src="/uploads/group-37.png" alt="">
                        <h2>Проектируем  <br>и строим</h2>
                    </div>
                </div>
                <div class="section_1_block_2 revealator-slideup revealator-delay1  revealator-once">
                    <div class="skills">
                        <img src="/uploads/group-26.png" alt="">
                        <h2>Реконструируем</h2>
                    </div>
                </div>
                <div class="section_1_block_2 revealator-slideup revealator-delay2 revealator-once">
                    <div class="skills">
                        <img src="/uploads/group-100.png" alt="">
                        <h2>Ремонт, отделка, технический надзор</h2>
                    </div>
                </div>
            </div>
            <div class='button_slide_block revealator-slideup revealator-delay3 revealator-once'>
                <div class="three">
                    <a href="#" class="button_slide"><p>Хочу знать больше</p></a>
                    <div class="hover"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-2" id="section2_scroll">
    <div class="container">
        <div class="aside">
            <div class="row">
                <h1>02</h1>
            </div>
        </div>
        <div class="article">
            <div class="row revealator-slideup revealator-once">
                <div class="section_2_block">
                    <h1>Мы построили</h1>
                </div>
                <div class="section_2_block">&nbsp;</div>
                <div class="section_2_block">
                    <div class="controls">
                        <button class="prev"><span class="fas fa-angle-left"></span></button>
                        <div class="counter">
                            <p><span class="cp">1</span>/<span class="summ"></span></p>
                        </div>
                        <button class="next"><span class="fas fa-angle-right"></span></button>
                    </div>
                </div>
            </div>
            <div class="roww revealator-slideup revealator-delay1 revealator-once">
                <section class="lazy slider">
                    <?php foreach ($projects as $project):?>
                    <div>
                        <img src="<?= $project->home_image?>">
                        <h2><?= $project->name?></h2>
                        <div class='button_slide_block'>
                            <div class="three">
                                <a href="<?= Url::to(['projects/one', 'slug' => $project->slug])?>" class="button_slide"><p>Подробнее</p></a>
                                <div class="hover"></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </section>
                <div class="controls">
                    <button class="prev"><span class="fas fa-angle-left"></span></button>
                    <div class="counter">
                        <p><span class="cp">1</span>/<span class="summ"></span></p>
                    </div>
                    <button class="next"><span class="fas fa-angle-right"></span></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-3" id="section3_scroll">
    <div class="container">
        <div class="aside">
            <div class="row">
                <h1>03</h1>
            </div>
        </div>
        <div class="article">
            <div class="row">
                <div class="section_3_block revealator-slideup revealator-once">
                    <h1>О компании</h1>
                    <p>ООО «Универсалстрой» – строительная компания, которая осуществляет функции генерального подрядчика и проектировщика. Наша компания работает на строительном рынке с 2002 года. Мы команда профессионалов, которая осуществляет комплексный подход к решению задач наших Заказчиков. ООО «Универсалстрой» - для тех, кто ценит время и качество!</p>
                </div>
            </div>
            <div class="row section_3_2">
                <div class="section_3_block2 revealator-slideup revealator-delay1 revealator-once">
                    <h1>16</h1>
                    <p>Лет упешной работы на рынке строительства</p>
                </div>
                <div class="section_3_block2 revealator-slideup revealator-delay2 revealator-once">
                    <h1>126</h1>
                    <p>Обьектов построено</p>
                </div>
                <div class="section_3_block2 revealator-slideup revealator-delay3 revealator-once">
                    <h1>256</h1>
                    <p>Довольных клиентов</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-4" id="section4_scroll">
    <div class="container">
        <div class="aside">
            <div class="row">
                <h1>04</h1>
            </div>
        </div>
        <div class="article">
            <div class="row">
                <div class="section_4_block revealator-slideup revealator-once">
                    <h1>Производство</h1>
                </div>
            </div>
            <div class="section_4_1">
                <div class="section_4_block2 revealator-slideup revealator-delay1 revealator-once">
                    <div class="section_4_three">
                        <a href="<?= Url::to(['production/view'])?>" >
                            <div class="section_4_button">
                                <h2>Окна и двери ПВХ  и алюминия</h2>
                                <p class="section_4_link">Подробнее</p>
                            </div>
                        </a>
                        <div class="section_4_hover"></div>
                    </div>
                </div>
                <div class="section_4_block2 revealator-slideup revealator-delay2 revealator-once">
                    <div class="section_4_three">
                        <a href="#" >
                            <div class="section_4_button">
                                <h2>Доборные элементы кровли</h2>
                                <p class="section_4_link">Подробнее</p>
                            </div>
                        </a>
                        <div class="section_4_hover"></div>
                    </div>
                </div>
                <div class="section_4_block2 revealator-slideup revealator-delay3 revealator-once">
                    <div class="section_4_three">
                        <a href="#" >
                            <div class="section_4_button">
                                <h2>Металлические двери, заборы, решетки</h2>
                                <p class="section_4_link">Подробнее</p>
                            </div>
                        </a>
                        <div class="section_4_hover"></div>
                    </div>
                </div>
                <div class="section_4_block2 revealator-slideup revealator-delay4 revealator-once">
                    <div class="section_4_three">
                        <a href="#">
                            <div class="section_4_button">
                                <h2>Снегозадержатели</h2>
                                <p class="section_4_link">Подробнее</p>
                            </div>
                        </a>
                        <div class="section_4_hover"></div>
                    </div>
                </div>
                <div class="section_4_block2 revealator-slideup revealator-delay5 revealator-once">
                    <div class="section_4_three">
                        <a href="#" >
                            <div class="section_4_button">
                                <h2>Детские площадки</h2>
                                <p class="section_4_link">Подробнее</p>
                            </div>
                        </a>
                        <div class="section_4_hover"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>