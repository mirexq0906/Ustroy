<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Services */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сервисы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="services-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            'content:html',
            'name_accordion',
            'slug',
            //'status',
            ['attribute' => 'status',
            'value' => function($model) {
                if($model->status == 1) {
                    $status = 'Активен';
                } else {
                    $status = 'Не активен';
                }
                return $status;
            }],
            'sorter',
            'created_at',
            'updated_at',
            //'keywords',
            //'description',
        ],
    ]) ?>

</div>
