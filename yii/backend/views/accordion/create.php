<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Accordion */

$this->title = 'Создать аккордион';
$this->params['breadcrumbs'][] = ['label' => 'Аккордион', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accordion-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
