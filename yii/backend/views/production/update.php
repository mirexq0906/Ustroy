<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Production */

$this->title = 'Изменить производство: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Производство', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="production-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
