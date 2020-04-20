<?php

namespace humhub\modules\scrollup;

use yii\helpers\Url;
use humhub\components\Module as BaseModule;

class Module extends BaseModule
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/scrollup/admin/index']);
    }

    public function getPosition()
    {
        $position = $this->settings->get('position');
        if (empty($position)) {
            return '';
        }
        return $position;
    }

    public function getColor()
    {
        $color = $this->settings->get('color');
        if (empty($color)) {
            return '';
        }
        return $color;
    }
}
