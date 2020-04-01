<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;
use humhub\modules\scrollup\Assets;

Assets::register($this);
?>

<?= Html::beginTag('div') ?>
<a id="button"></a>
<?= Html::endTag('div'); ?>
