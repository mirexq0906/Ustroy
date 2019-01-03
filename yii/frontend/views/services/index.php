<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="services_block">
    <section class="section-4" id="section4_scroll">
        <div class="container">
            <div class="aside">
                <div class="row">
                    <h1>01</h1>
                </div>
            </div>
            <div class="article">
                <div class="row">
                    <div class="section_4_block revealator-slideup revealator-once">
                        <h1>Наши услуги</h1>
                    </div>
                </div>
                <div class="section_4_1">
                    <?php foreach ($services as $service):?>
                    <div class="section_4_block2 revealator-slideup revealator-delay1 revealator-once">
                        <div class="section_4_three">
                            <a href="<?= Url::to(['services/one', 'slug' => $service->slug])?>">
                                <div class="section_4_button">
                                    <h2><?= $service->name?></h2>
                                    <p class="section_4_link">Подробнее</p>
                                </div>
                            </a>
                            <div class="section_4_hover"></div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="services_block2">
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
                        <div>
                            <img src="/uploads/rectangle.jpg">
                            <h2>Alex Wood Complex Residence</h2>
                            <div class='button_slide_block'>
                                <div class="three">
                                    <a href="#" class="button_slide"><p>Подробнее</p></a>
                                    <div class="hover"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="/uploads/rectangle.jpg">
                            <h2>Alex Wood Complex Residence</h2>
                            <div class='button_slide_block'>
                                <div class="three">
                                    <a href="#" class="button_slide"><p>Подробнее</p></a>
                                    <div class="hover"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="/uploads/rectangle.jpg">
                            <h2>Alex Wood Complex Residence</h2>
                            <div class='button_slide_block'>
                                <div class="three">
                                    <a href="#" class="button_slide"><p>Подробнее</p></a>
                                    <div class="hover"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="/uploads/rectangle.jpg">
                            <h2>Alex Wood Complex Residence</h2>
                            <div class='button_slide_block'>
                                <div class="three">
                                    <a href="#" class="button_slide"><p>Подробнее</p></a>
                                    <div class="hover"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="/uploads/rectangle.jpg">
                            <h2>Alex Wood Complex Residence</h2>
                            <div class='button_slide_block'>
                                <div class="three">
                                    <a href="#" class="button_slide"><p>Подробнее</p></a>
                                    <div class="hover"></div>
                                </div>
                            </div>
                        </div>
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
</div>