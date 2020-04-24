<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;
use humhub\modules\ui\view\components\View;

/* @var $position string */
/* @var $color string */
/* @var $this View */

$this->registerJs("var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});");

?>

<?= Html::beginTag('div') ?>
<a id="button" style="background-color: <?= $color; ?>; position: fixed; bottom: 30px; <?= $position; ?>"></a>
<?= Html::endTag('div'); ?>
