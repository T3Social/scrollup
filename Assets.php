<?php

namespace humhub\modules\scrollup;

use yii\web\AssetBundle;

/**
 * Asset bundle for Scrollup
 *
 */
class Assets extends AssetBundle
{
    public $sourcePath = '@humhub/modules/scrollup/assets';

    public $css = [
        'css/scrollup.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
