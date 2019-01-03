<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 14:30
 */

namespace frontend\controllers;


class ProductionController extends AppController
{
    public function actionView()
    {
        $this->layout = 'base';
        return $this->render('view');
    }
}