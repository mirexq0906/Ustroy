<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сервисы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать сервис', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'content:ntext',
            //'name_accordion',
            //'keywords',
            //'description',
            //'slug',
            ['attribute' => 'status', 'filter' => ['Не активен', "Активен"], 'value' => function($model) {
                if($model->status == 1) {
                    $status = 'Активен';
                } else {
                    $status = 'Не активен';
                }
                return $status;
            }],
            //'status',
            //'sorter',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
