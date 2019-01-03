<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 13:33
 */

namespace frontend\controllers;
use yii\web\Controller;
use common\models\Project;

class HomeController extends AppController
{
    public function actionIndex()
    {
        $projects = Project::find()->where(['status' => 1])->orderBy('sorter')->all();
        return $this->render('index', compact('projects'));
    }
}