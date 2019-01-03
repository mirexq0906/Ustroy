<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 13:50
 */

namespace frontend\controllers;


use common\models\Services;

class ServicesController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'base';
        $services = Services::find()->andWhere(['status' => 1])->orderBy('sorter')->all();
        return $this->render('index', compact('services'));
    }
    public function actionOne($slug)
    {
        $this->layout = 'base';
        $service = Services::find()->with('accordion')->andWhere(['slug' => $slug])->one();
        $this->setMeta('Универсалстрой | ' . $service->name, $service->keywords, $service->description);
        return $this->render('one', compact('service'));
    }
}