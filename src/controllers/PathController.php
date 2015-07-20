<?php

namespace DotPlant\ElFinder\controllers;

use Yii;
use app;

class PathController extends \mihaildev\elfinder\Controller
{
    public $access = ['administrate'];
    public $disabledCommands = ['netmount'];
    public $roots = [
        [
            'baseUrl' => '@web/upload/files',
            'basePath' => '@webroot/upload/files/',
            'path' => '',
            'name' => 'Global',
        ],
    ];

    public function beforeAction($action)
    {

        Yii::$app->controller->enableCsrfValidation = false;


        return parent::beforeAction($action);
    }
}