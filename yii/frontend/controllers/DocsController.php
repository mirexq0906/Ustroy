<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 14:10
 */

namespace frontend\controllers;


class DocsController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'base';
        return $this->render('index');
    }
}