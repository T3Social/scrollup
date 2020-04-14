<?php

namespace humhub\modules\scrollup;

use humhub\modules\scrollup\Events;
use humhub\modules\scrollup\Module;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\space\widgets\Sidebar as Space;
use humhub\modules\dashboard\widgets\Sidebar as Dashboard;

return [
    'id' => 'scrollup',
    'class' => Module::class,
    'namespace' => 'humhub\modules\scrollup',
    'events' => [
        ['class' => Dashboard::class, 'event' => Dashboard::EVENT_INIT, 'callback' => [Events::class, 'onScrollUp']],
        ['class' => Space::class, 'event' => Space::EVENT_INIT, 'callback' => [Events::class, 'onScrollUp']],
        ['class' => AdminMenu::class, 'event' => AdminMenu::EVENT_INIT, 'callback' => [Events::class, 'onAdminMenuInit']]
    ]
];
?>