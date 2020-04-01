<?php

namespace humhub\modules\scrollup;

use Yii;
use yii\base\BaseObject;
use humhub\models\Setting;

class Events extends BaseObject
{

  public static function onScrollUp($event)
  {
      if (Yii::$app->user->isGuest) {
          return;
      }
      $event->sender->view->registerAssetBundle(Assets::class);
      $event->sender->addWidget(widgets\ScrollUp::class, [], [
          'sortOrder' => Setting::Get('timeout', 'scrollup')
      ]);
  }
}