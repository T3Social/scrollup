<?php

namespace humhub\modules\scrollup;


class Module extends \humhub\components\Module
{

    public function getPosition()
    {
        $position = $this->settings->get('position');
        if (empty($position)) {
            return '';
        }
        return $position;
    }
}