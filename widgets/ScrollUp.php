<?php

namespace humhub\modules\scrollup\widgets;

use yii\helpers\Json;
use yii\helpers\Html;
use humhub\components\Widget;
use humhub\modules\scrollup\Assets;
/**
 * scroll-up widget to include in a website
 *
 */
class ScrollUp extends Widget
{

    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function init()
    {
        $view = $this->getView();
        Assets::register($view);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        return $this->render('scrollup', ['class'=>'glyphicon glyphicon-menu-up button-circle'], ['id'=>'btn-top-scroller', 'class'=>'button']);
    }
}