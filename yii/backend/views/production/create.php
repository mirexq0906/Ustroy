<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Production */

$this->title = 'Создать производство';
$this->params['breadcrumbs'][] = ['label' => 'Производство', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
