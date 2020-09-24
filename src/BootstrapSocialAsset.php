<?php

namespace andre1ka\social\share;

use yii\web\AssetBundle;

/**
 * Class BootstrapSocialAsset
 * @package andre1ka\social\share
 */
class BootstrapSocialAsset extends AssetBundle{
    
    public $sourcePath = '@bower/bootstrap-social/';
    
    public $css = [
        'bootstrap-social.css',
    ];
    
}
