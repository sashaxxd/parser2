<?php

use yii\helpers\Html;
?>
<?php $form = yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?//= $form->errorSummary($model); ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('ИМПОРТИРОВАТЬ В БАЗУ', ['class' => 'btn btn-success']) ?>
</div>

<?php yii\widgets\ActiveForm::end() ?>

<div id="success" style="font-size: 30px; color: red;"><?= $res; ?></div>
