<?php

namespace wayne1020\layui;

use Yii;
use yii\web\AssetBundle;

/**
 * LayuiAsset
 */
class LayuiAsset extends AssetBundle
{
    
    public $sourcePath = '@vendor/wayne1020/layui/assets';
    
    public $css = [
        'css/layui.css',
    ];
    
    public $js = [
        'js/layui.all.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}