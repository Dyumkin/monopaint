<?php

namespace app\modules\monopaint\assets;

use yii\web\AssetBundle;

class ModuleAsset extends AssetBundle
{
    /** @inheritdoc */
    public $css = [
        'css/plugins.css'
    ];

    /** @inheritdoc */
    public $js = [
        'js/fancy-box.js',
        'js/modal.js',
    ];

    /** @inheritdoc */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'app\modules\monopaint\assets\FancyBoxAsset',
        'app\modules\monopaint\assets\FontAwesomeAsset',
    ];

    /** @inheritdoc */
    public function init()
    {
        $this->sourcePath = __DIR__ ;
        parent::init();
    }
}
