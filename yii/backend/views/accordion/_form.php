<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model common\models\Accordion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accordion-form">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Основные данные</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <?php // $form->field($model, 'services_id')->textInput() ?>

            <div class="form-group field-accordion-services_id required">
                <label class="control-label" for="accordion-services_id">Название сервиса</label>
                <select id="accordion-services_id" class="form-control" name="Accordion[services_id]">
                    <?= frontend\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $model]) ?>
                </select>
            </div>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?php
            echo $form->field($model, 'content')->widget(CKEditor::className(), [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]);
            ?>

            <?php // $form->field($model, 'created_at')->textInput() ?>

            <?php // $form->field($model, 'updated_at')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
