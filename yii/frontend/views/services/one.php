<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 18:21
 */
?>
<div class="type_of_services-block">
    <section class="section-3" id="section3_scroll">
        <div class="container">
            <div class="aside">
                <div class="row">
                    <span></span>
                </div>
            </div>
            <div class="article">
                <div class="row">
                    <div class="section_3_block revealator-slideup revealator-once">
                        <h1><?= $service->name ?></h1>
                        <?= $service->content ?>
                    </div>
                </div>
                <div class="row section_3_2">
                    <div class="headline-accordion revealator-slideup revealator-once">
                        <h1><?= $service->name_accordion ?></h1>
                    </div>
                    <?php foreach ($service->accordion as $all):?>
                    <div class="accordion revealator-slideup revealator-delay3 revealator-once">
                        <div class="accordion-title">
                            <h2><?= $all->name?></h2>
                            <span class="fas fa-angle-right"></span>
                        </div>
                        <div class="accordion-content" style="display: none;">
                            <?= $all->content?>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
</div>
