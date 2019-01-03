<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 14:17
 */

namespace frontend\controllers;
use common\models\Project;

class ProjectsController extends AppController
{
    public function actionOne($slug)
    {
        $this->layout = 'base';
        $project = Project::find()->where(['slug' => $slug])->one();
        $this->setMeta('Универсалстрой | ' . $project->name, $project->keywords, $project->description);
        return $this->render('one', compact('project'));
    }
}