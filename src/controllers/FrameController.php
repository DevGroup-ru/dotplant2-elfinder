<?php

namespace DotPlant\ElFinder\controllers;

use app\backend\components\BackendController;
use Yii;


class FrameController extends BackendController
{

    public function actionIndex()
    {
        return $this->renderAjax('index');
    }
}