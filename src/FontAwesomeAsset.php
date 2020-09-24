<?php

namespace andre1ka\social\share;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package andre1ka\social\share
 */
class FontAwesomeAsset extends AssetBundle {
    
    public $sourcePath = '@bower/font-awesome/';
    
    public $css = [
        'css/font-awesome.css',
    ];
    
}
