<?php

namespace andre1ka\social\share;

use yii\web\AssetBundle;

/**
 * Class ShareAsset
 * @package bigpaulie\social\share
 */
class ShareAsset extends AssetBundle {
    
    public $sourcePath = '@vendor/andre1ka/yii2-social-share/src';
    
    public $js = [
        'assets/js/social-share.js',
    ];
    
    public $depends = [
        'andre1ka\social\share\BootstrapSocialAsset',
        'andre1ka\social\share\FontAwesomeAsset'
    ];
    
}
