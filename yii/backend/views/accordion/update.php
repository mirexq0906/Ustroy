<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Accordion */

$this->title = 'Изменить аккордион: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Аккордион', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accordion-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
