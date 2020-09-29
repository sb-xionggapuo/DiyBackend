<?php


namespace backend\assets;


use yii\web\AssetBundle;

class DiyAsset extends AssetBundle
{
    public $basePath = "@backend/web/style";
    public $baseUrl  = "@webroot/asset";
    public $publishOptions=[
        'api/*',
        'css/*',
        'images/*',
        'js/*',
        'lib/*',
        'page/*',
        'favicon.ico'
    ];
    public $css = [
        'css/themes/default.css',
    ];
}