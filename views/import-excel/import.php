
<?php $form = yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?//= $form->errorSummary($model); ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php yii\widgets\ActiveForm::end() ?>


<div id="success" style="font-size: 30px; color: red;"><?= $res; ?></div>
