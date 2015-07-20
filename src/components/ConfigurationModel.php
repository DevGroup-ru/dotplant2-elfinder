<?php

namespace DotPlant\ElFinder\components;
use app\modules\config\models\BaseConfigurationModel;

class ConfigurationModel extends BaseConfigurationModel
{

    /**
     * Fills model attributes with default values
     * @return void
     */
    public function defaultValues()
    {

    }

    /**
     * Returns array of module configuration that should be stored in application config.
     * Array should be ready to merge in app config.
     * Used both for web only.
     *
     * @return array
     */
    public function webApplicationAttributes()
    {
        return [
            'controllerMap' => [
                'elfinder' => [
                    'class' => 'mihaildev\elfinder\Controller',
                    'access' => ['@'], //глобальный доступ к фаил менеджеру @ - для авторизорованных , ? - для гостей , чтоб открыть всем ['@', '?']
                    'disabledCommands' => ['netmount'], //отключение ненужных команд https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#commands
                    'roots' => [
                        [
                            'baseUrl'=>'@web/upload/files/',
                            'basePath'=>'@webroot/upload/files/',
                            'path' => 'upload/files/',
                            'name' => 'Global'
                        ],
                    ],
//                    'watermark' => [
//                        'source'         => __DIR__.'/logo.png', // Path to Water mark image
//                        'marginRight'    => 5,          // Margin right pixel
//                        'marginBottom'   => 5,          // Margin bottom pixel
//                        'quality'        => 95,         // JPEG image save quality
//                        'transparency'   => 70,         // Water mark image transparency ( other than PNG )
//                        'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
//                        'targetMinPixel' => 200         // Target image minimum pixel size
//                    ]
                ]
            ],
        ];
    }

    /**
     * Returns array of module configuration that should be stored in application config.
     * Array should be ready to merge in app config.
     * Used both for console only.
     *
     * @return array
     */
    public function consoleApplicationAttributes()
    {
        return [];
    }

    /**
     * Returns array of module configuration that should be stored in application config.
     * Array should be ready to merge in app config.
     * Used both for web and console.
     *
     * @return array
     */
    public function commonApplicationAttributes()
    {
        return [
            'modules' => [
                'elfinder' => [
                    'class' => 'DotPlant\ElFinder\Module',
                ],
            ],
        ];
    }

    /**
     * Returns array of key=>values for configuration.
     *
     * @return mixed
     */
    public function keyValueAttributes()
    {
        return [];
    }

    /**
     * Returns array of aliases that should be set in common config
     * @return array
     */
    public function aliases()
    {
        return [
            '@elfinder' => realpath(dirname(__FILE__).'/../'),
        ];
    }
}