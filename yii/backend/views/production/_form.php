<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use zxbodya\yii2\galleryManager\GalleryManager;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model common\models\Production */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="production-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?php
            echo $form->field($model, 'content')->widget(CKEditor::className(), [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]);
            ?>

            <?php // $form->field($model, 'content')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'status')->textInput() ?>

            <?= $form->field($model, 'sorter')->textInput() ?>

            <?php
                echo GalleryManager::widget(
                    [
                        'model' => $model,
                        'behaviorName' => 'galleryBehavior',
                        'apiRoute' => 'production/galleryApi'
                    ]
                );

            ?>
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
