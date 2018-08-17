<?php

use yii\helpers\Html;
?>

<h1>Cтраница - например https://www.sklad-generator.ru/elektrostancii/
    или конкретная категория
    https://www.sklad-generator.ru/elektrostancii/dizelnye/genese/
</h1>
<h2>Количество страниц для парсинга (смотрим пагинацию) - рекомендуется парсить небольшими частями
лучше категориями а не весь каталог</h2>
<?php $form = yii\widgets\ActiveForm::begin() ?>

<?= $form->field($xxx, 'url')->textInput() ?>

<?= $form->field($xxx, 'end')->textInput(['type' => 'number', 'style' => 'width:100px', 
    'min' => 1])?>

<div class="form-group">
    <?= Html::submitButton('СПАРСИТЬ', ['class' => 'btn btn-success']) ?>
</div>

<?php yii\widgets\ActiveForm::end() ?>

<div id="success" style="font-size: 30px; color: red;"><?= $message; ?></div>