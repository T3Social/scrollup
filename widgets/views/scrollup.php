<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

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
<a id="button" style="position: fixed; bottom: 30px; <?= $position; ?>"></a>
<?= Html::endTag('div'); ?>