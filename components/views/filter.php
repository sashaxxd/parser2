<?php
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['id' => 'form-ajax']); ?>
<div class="col-1">
    <div id="site_Text3">
        &nbsp;
    </div>
    <div id="site_Text4">
        &nbsp;
    </div>
    <div id="site_Text5">
        <span id="site_sid4"><strong>ФИЛЬТР:</strong></span>
    </div>
    <div id="site_Text6">
        <span id="site_sid5"><strong>Топливо</strong></span><span id="site_sid6"><strong>:</strong></span>
    </div>
    <div id="site_Container3">
        <div id="Container3">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox1">
<!--                        <input type="checkbox" id="Checkbox1" name="Checkbox1" value="on"><label for="Checkbox1"></label>-->

                        <?php  echo $form->field($searchModel, 'toplivo',[
                            'template' => '{input}<label for="Checkbox2"></label>',
                        ])->checkbox([ 'value' => 'Дизель', 'class' => 'checkbox', 'id' => 'Checkbox1', 'label' => null])->label(false) ?>
                    </div>
                    <label for="Checkbox1" id="Label1">Дизель</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Container4">
        <div id="Container4">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox2">
<!--                        <input type="checkbox" id="Checkbox2" name="Checkbox2" value="on"><label for="Checkbox2"></label>-->
                        <?php  echo $form->field($searchModel, 'toplivo2',[
                            'template' => '{input}<label for="Checkbox2"></label>',
                        ])->checkbox([ 'value' => 'Бензин', 'class' => 'checkbox', 'id' => 'Checkbox2', 'label' => null])->label(false) ?>
                    </div>
                    <label for="Checkbox2" id="Label2">Бензин</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Container5">
        <div id="Container5">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox3">
<!--                        <input type="checkbox" id="Checkbox3" name="Checkbox3" value="on"><label for="Checkbox3"></label>-->
                        <?php  echo $form->field($searchModel, 'toplivo3',[
                            'template' => '{input}<label for="Checkbox2"></label>',
                        ])->checkbox([ 'value' => 'Газ', 'class' => 'checkbox', 'id' => 'Checkbox3', 'label' => null])->label(false) ?>
                    </div>
                    <label for="Checkbox3" id="Label3">Газ</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Text17">
        <span id="site_sid7"><strong>Мощность , кВт</strong></span><span id="site_sid8"><strong>:</strong></span>
    </div>
    <div id="site_Container14">
        <div id="Container14">
            <div class="row">
                <div class="col-1">
                    <div id="site_Text18">
                        <span id="site_sid9"><strong>От:</strong></span>
                    </div>
                    <input type="text" id="Editbox1" name="Editbox1" value="" spellcheck="false" placeholder="0.69">
                </div>
                <div class="col-2">
                    <div id="site_Text19">
                        <span id="site_sid10"><strong>До:</strong></span>
                    </div>
                    <input type="text" id="Editbox2" name="Editbox1" value="" spellcheck="false" placeholder="18">
                </div>
            </div>
        </div>
    </div>
    <div id="site_Text7">
        <span id="site_sid11"><strong>Наличие ABP</strong></span><span id="site_sid12"><strong>:</strong></span>
    </div>
    <div id="site_Container6">
        <div id="Container6">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox4">
                        <input type="checkbox" id="Checkbox4" name="Checkbox4" value="on"><label for="Checkbox4"></label>
                    </div>
                    <label for="Checkbox4" id="Label4">Есть</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Container7">
        <div id="Container7">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox5">
                        <input type="checkbox" id="Checkbox5" name="Checkbox5" value="on"><label for="Checkbox5"></label>
                    </div>
                    <label for="Checkbox5" id="Label5">Нет</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Text21">
        <span id="site_sid13"><strong>Напряжение, В</strong></span><span id="site_sid14"><strong>:</strong></span>
    </div>
    <div id="site_Container15">
        <div id="Container15">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox6">
                        <input type="checkbox" id="Checkbox6" name="Checkbox6" value="on"><label for="Checkbox6"></label>
                    </div>
                    <label for="Checkbox6" id="Label9">230</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Container16">
        <div id="Container16">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox7">
                        <input type="checkbox" id="Checkbox7" name="Checkbox7" value="on"><label for="Checkbox7"></label>
                    </div>
                    <label for="Checkbox7" id="Label10">230/400</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Text16">
        <span id="site_sid15"><strong>Исполнение</strong></span><span id="site_sid16"><strong>:</strong></span>
    </div>
    <div id="site_Container11">
        <div id="Container11">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox8">
                        <input type="checkbox" id="Checkbox8" name="Checkbox8" value="on"><label for="Checkbox8"></label>
                    </div>
                    <label for="Checkbox8" id="Label6">Открытое</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Container12">
        <div id="Container12">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox9">
                        <input type="checkbox" id="Checkbox9" name="Checkbox9" value="on"><label for="Checkbox9"></label>
                    </div>
                    <label for="Checkbox9" id="Label7">В кожухе</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Container13">
        <div id="Container13">
            <div class="row">
                <div class="col-1">
                    <div id="site_Checkbox10">
                        <input type="checkbox" id="Checkbox10" name="Checkbox10" value="on"><label for="Checkbox10"></label>
                    </div>
                    <label for="Checkbox10" id="Label8">На кронштейне</label>
                </div>
            </div>
        </div>
    </div>
    <div id="site_Text20">
        <span id="site_sid17"><strong>Цена</strong></span><span id="site_sid18"><strong>:</strong></span>
    </div>
    <div id="site_price_container">
        <div id="price_container">
            <div class="row">
                <div class="col-1">
                </div>
            </div>
        </div>
    </div>
    <input type="submit" id="Button1" name="" value="ПОДОБРАТЬ">
</div>
<?php ActiveForm::end(); ?>
