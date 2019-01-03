<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\InputFile;
use zxbodya\yii2\galleryManager\GalleryManager;
mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Основные данные</a></li>
        <li><a href="#seo" data-toggle="tab">SEO</a></li>
        <li><a href="#url" data-toggle="tab">URL</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?php echo $form->field($model, 'home_image')->widget(InputFile::classname(), [
                'path' => 'project',
                'buttonName' => 'Выбрать файл',
                'buttonOptions' => ['class' => 'btn btn-primary btn-sm'],
                'template' => '{button} {input}',
            ]); ?>

            <?php
            echo $form->field($model, 'content')->widget(CKEditor::className(), [
                'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
            ]);
            ?>

            <?php // $form->field($model, 'home_image')->textInput(['maxlength' => true]) ?>

            <?php // $form->field($model, 'content')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'status')->dropDownList(['1' => 'Активен', '0' => 'Не активен']) ?>

            <?= $form->field($model, 'sorter')->textInput() ?>

            <?php
            if ($model->isNewRecord) {
                echo 'Can not upload images for new record';
            } else {
                echo GalleryManager::widget(
                    [
                        'model' => $model,
                        'behaviorName' => 'galleryBehavior',
                        'apiRoute' => 'project/galleryApi'
                    ]
                );
            }
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
