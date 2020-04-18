<?php

namespace humhub\modules\scrollup;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

     /**
     * @param Event $event
     * @throws \Exception
     * @throws \Throwable
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Scroll Up Settings',
            'url' => Url::toRoute('/scrollup/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-chevron-up"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'scrollup' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

     /**
     * @param Event $event
     * @throws \Exception
     * @throws \Throwable
     */
    public static function onScrollUp($event)
    {
        // Do not allow guest view force logged in
        //if (Yii::$app->user->isGuest) {
        //    return \humhub\modules\user\models\User::EVENT_CHECK_VISIBILITY;
        //}

        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(widgets\ScrollUp::class, [], [
            'sortOrder' => Setting::Get('timeout', 'scrollup')
            ]);

    }
}