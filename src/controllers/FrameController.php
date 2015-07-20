<?php

namespace controllers;

use Yii;
use yii\web\Controller;

class FrameController extends Controller
{

    public function actionIndex()
    {
        return $this->renderAjax('index');
    }
}