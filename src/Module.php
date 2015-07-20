<?php

namespace DotPlant\ElFinder;

use app;
use app\components\ExtensionModule;
use Yii;

class Module extends ExtensionModule
{
    public static $moduleId = 'elfinder';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'configurableModule' => [
                'class' => 'app\modules\config\behaviors\ConfigurableModuleBehavior',
                'configurationView' => '@elfinder/views/configurable/_config',
                'configurableModel' => 'DotPlant\ElFinder\components\ConfigurationModel',
            ]
        ];
    }
}
