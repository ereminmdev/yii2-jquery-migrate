<?php

namespace ereminmdev\yii2\jquery_migrate;

use yii\web\AssetBundle;

class JqueryMigrateAsset extends AssetBundle
{
    public $sourcePath = '@npm/jquery-migrate/dist';

    public $js = [
        YII_DEBUG ? 'jquery-migrate.js' : 'jquery-migrate.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
