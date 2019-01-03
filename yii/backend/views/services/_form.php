<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Основные данные</a></li>
        <li><a href="#seo" data-toggle="tab">SEO</a></li>
        <li><a href="#url" data-toggle="tab">URL</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?php
            echo $form->field($model, 'content')->widget(CKEditor::className(), [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]);
            ?>

            <?= $form->field($model, 'name_accordion')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'status')->dropDownList(['1' => 'Активен', '0' => 'Не активен']) ?>

            <?= $form->field($model, 'sorter')->textInput() ?>
        </div>
        <div class="tab-pane" id="seo">
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane" id="url">
            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
