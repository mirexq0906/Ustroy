<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="specific_project">
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
                        <h1><?=$project->name?></h1>
                        <?=$project->content?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="specific_project2">
    <div class="container">
        <div class="aside">
            <div class="row">
                <span>&nbsp</span>
            </div>
        </div>
        <div class="article">
            <div class="section_3_block">
                <div class="section-gallery">
                    <div class="slide_gallery revealator-slideup revealator-once">
                        <ul class="gallery_viewport">
                            <?php foreach($project->getBehavior('galleryBehavior')->getImages() as $image):?>
                                <li>
                                    <?= Html::img($image->getUrl('medium'), ['alt' => $project->name])?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                        <div class="button_viewprot-control">
                            <div class="gallery-button">
                                <button class="prev-gallery"><span class="fas fa-angle-left"></span></button>
                                <p class="gallery-summ"><span class="gallery-cp">1</span>/<span class="summ-gallery"></span></p>
                                <button class="next-gallery"><span class="fas fa-angle-right"></button>
                            </div>
                            <div class="hover-gallery"></div>
                        </div>
                    </div>
                </div>
                <div class="button_viewprot-control-ty">
                    <div class="gallery-button-ty">
                        <button class="prev-gallery"><span class="fas fa-angle-left"></span></button>
                        <p class="gallery-summ"><span class="gallery-cp">1</span>/<span class="summ-gallery"></span></p>
                        <button class="next-gallery"><span class="fas fa-angle-right"></button>
                    </div>
                    <div class="hover-gallery-ty"></div>
                </div>
            </div>
        </div>
    </div>
</div>