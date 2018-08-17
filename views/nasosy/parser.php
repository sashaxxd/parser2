<h1>Cтраница - например https://www.sklad-generator.ru/elektrostancii/
    или конкретная категория
    https://www.sklad-generator.ru/elektrostancii/dizelnye/genese/
</h1>
<h2>Количество страниц для парсинга (смотрим пагинацию) - рекомендуется парсить небольшими частями
лучше категориями а не весь каталог</h2>
<?php $form = yii\widgets\ActiveForm::begin() ?>

<?= $form->field($xxx, 'url')->textInput() ?>

<?= $form->field($xxx, 'end')->textInput()?>

<button>СПАРСИТЬ</button>

<?php yii\widgets\ActiveForm::end() ?>

<?php
echo $message;