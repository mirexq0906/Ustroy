<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="header">
        <div class="menu-static">
            <div class="container">
                <div class="row">
                    <div class="header-top">
                        <div class="header-block">
                            <a href="<?= Url::home()?>" class="logo">Универсал-строй</a>
                        </div>
                        <div class="header-block">
                            <div class="row">
                                <a href="<?= Url::home()?>">Главная</a><span>|</span><a href="#">Наши услуги</a>
                            </div>
                        </div>
                        <div class="header-block">
                            <p class="phone">8(812)926-34-12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $content; ?>
    <footer>
        <div class="container">
            <div class="footer_section_1">
                <div class="footer-block">
                    <div class="row">
                        <h2>Услуги</h2>
                        <ul>
                            <li><a href="#">Проектирование</a></li>
                            <li><a href="#">Строительство
                            <li><a href="#">Ремонт</a></li>
                            <li><a href="#">Отделка</a></li>
                            <li><a href="#">Технический надзор</a></li>
                            <li><a href="#">Проектирование</a></li>
                            <li><a href="#">Реконструкция</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-footer_block"></div>
                <div class="footer-block">
                    <div class="row">
                        <h2>Информация</h2>
                        <ul>
                            <li><a href="<?= Url::to(['docs/index'])?>">Документы</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-footer_block"></div>
                <div class="footer-block">
                    <div class="row">
                        <h2>Производство</h2>
                        <ul>
                            <li><a href="#">Окна и двери ПВХ и алюминия</a></li>
                            <li><a href="#">Доборные элементы кровли</a></li>
                            <li><a href="#">Детские площадки</a></li>
                            <li><a href="#">Металлические двери, заборы</a></li>
                            <li><a href="#">Снегозадержатели</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-footer_block"></div>
                <div class="footer-block">
                    <div class="row">
                        <h2>Контакты</h2>
                        <div class="contact-1">
                            <p class="name">
                                Юридический адрес:
                            </p>
                            <p class="contact_content">
                                199178, г. Санкт-Петербург, 15-линия Васильевского Острова, д. 12, литер А, пом. 4Н, ком. 21 <br>8(812)926-34-12
                            </p>
                        </div>
                        <div class="contact-2">
                            <p class="name">
                                Структурное подразделение:
                            </p>
                            <p class="contact_content">
                                610035, г. Киров, Мелькомбинатовский проезд, 8а, офис 30 <br>8(8332)255-774
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_border"></div>
        <div class="container">
            <div class="footer_section_2">
                <div class="Copyright">
                    <p>2018© Универсалстрой. Все права защищены.</p>
                </div>
                <div class="u2team">
                    <p>Дизайн и разработка</p><p><span class="red">u2</span><span class="white">.team</span></p><span class="u2-border"></span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        var summ = $('.slider').children().length;
        $(".summ").text(summ);
        $(document).on('ready', function() {
            $(".lazy").slick({
                speed: 200,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: '.prev',
                nextArrow: '.next',
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 801,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 621,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $(".slider").on('afterChange', function(event, slick, currentSlide){
                $(".cp").text(currentSlide + 1);
            });

        });
    </script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>