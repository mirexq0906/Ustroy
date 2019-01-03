<?php
/**
 * Created by PhpStorm.
 * User: Плохишь
 * Date: 28.12.2018
 * Time: 13:50
 */

namespace frontend\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    protected function setMeta($title = null, $keywords = null, $description = null) {
        $this->view->title = $title;
        $this->view->registerMetaTag (['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag (['name' => 'description', 'content' => "$description"]);
    }
}