<?php

namespace humhub\modules\scrollup;

use humhub\modules\scrollup\Events;
use humhub\modules\scrollup\Module;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'scrollup',
    'class' => Module::class,
    'namespace' => 'humhub\modules\scrollup',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'onScrollUp']],
    ]
];
?>
