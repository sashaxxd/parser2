<?php
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'КАТАЛОГ';
?>

<div id="site_Container17">
    <div id="Container17">
        <div class="row">
            <div class="col-1">
                <div id="site_Text23">
                    <span id="site_sid3">Каталог</span>
                </div>
                <div id="site_Container18">
                    <div id="Container18">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="site_Container2">
    <div id="Container2">
        <div class="row">

<!--            --><?//= \app\components\FilterWidget::widget();?>

            <?php $form = ActiveForm::begin(['id' => 'form-ajax',
                'action' => 'index',
                'method' => 'get',
//                'enableClientValidation' => false,
//                'enableAjaxValidation' => false
            ]); ?>
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


                                    <?php  echo $form->field($searchModel, 'toplivo1',[
                                        'template' => '{input}<label for="Checkbox1"></label>',
                                    ])->checkbox([ 'value' => 'дизель', 'class' => 'checkbox', 'id' => 'Checkbox1', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'toplivo2',[
                                        'template' => '{input}<label for="Checkbox2"></label>',
                                    ])->checkbox([ 'value' => 'бензин', 'class' => 'checkbox', 'id' => 'Checkbox2', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'toplivo3',[
                                        'template' => '{input}<label for="Checkbox3"></label>',
                                    ])->checkbox([ 'value' => 'газ', 'class' => 'checkbox', 'id' => 'Checkbox3', 'label' => null])->label(false) ?>
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
                            <div id="slider-range2" style="margin-top: 5px; margin-bottom: 5px;"></div>
                            <div class="col-1">

                                <div id="site_Text18">
                                    <span id="site_sid9"><strong>От:</strong></span>
                                </div>

                                <?php  echo $form->field($searchModel, 'power')->textInput(['id' => 'Editbox-power1', 'data-id' => $min_power])->label(false) ?>
                            </div>
                            <div class="col-2">
                                <div id="site_Text19">
                                    <span id="site_sid10"><strong>До:</strong></span>
                                </div>

                                <?php  echo $form->field($searchModel, 'power2')->textInput(['id' => 'Editbox-power2',  'data-id' => $max_power])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'abp1',[
                                        'template' => '{input}<label for="Checkbox4"></label>',
                                    ])->checkbox([ 'value' => 'есть', 'class' => 'checkbox', 'id' => 'Checkbox4', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'abp2',[
                                        'template' => '{input}<label for="Checkbox5"></label>',
                                    ])->checkbox([ 'value' => 'нет', 'class' => 'checkbox', 'id' => 'Checkbox5', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'voltage1',[
                                        'template' => '{input}<label for="Checkbox6"></label>',
                                    ])->checkbox([ 'value' => '230', 'class' => 'checkbox', 'id' => 'Checkbox6', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'voltage2',[
                                        'template' => '{input}<label for="Checkbox7"></label>',
                                    ])->checkbox([ 'value' => '230/400 В', 'class' => 'checkbox', 'id' => 'Checkbox7', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'performance1',[
                                        'template' => '{input}<label for="Checkbox8"></label>',
                                    ])->checkbox([ 'value' => 'открытое', 'class' => 'checkbox', 'id' => 'Checkbox8', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'performance2',[
                                        'template' => '{input}<label for="Checkbox9"></label>',
                                    ])->checkbox([ 'value' => 'в кожухе', 'class' => 'checkbox', 'id' => 'Checkbox9', 'label' => null])->label(false) ?>
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

                                    <?php  echo $form->field($searchModel, 'performance3',[
                                        'template' => '{input}<label for="Checkbox10"></label>',
                                    ])->checkbox([ 'value' => 'на кронштейне', 'class' => 'checkbox', 'id' => 'Checkbox10', 'label' => null])->label(false) ?>
                                </div>
                                <label for="Checkbox10" id="Label8">На кронштейне</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Text20">
                    <span id="site_sid17"><strong>Цена</strong></span><span id="site_sid18"><strong>:</strong></span>
                               </div>
                <div id="site_Container14">
                    <div id="Container14">
                        <div class="row">
                            <div id="slider-range" style="margin-top: 5px; margin-bottom: 5px;"></div>
                            <div class="col-1">

                                <div id="site_Text18">
                                    <span id="site_sid9"><strong>От:</strong></span>
                                </div>


                                <?php  echo $form->field($searchModel, 'price')->textInput(['id' => 'Editbox1', 'data-id' => $min_price])->label(false) ?>
                            </div>
                            <div class="col-2">
                                <div id="site_Text19">
                                    <span id="site_sid10"><strong>До:</strong></span>
                                </div>

                                <?php  echo $form->field($searchModel, 'price2')->textInput(['id' => 'Editbox2', 'data-id' => $max_price])->label(false) ?>
                            </div>
                        </div>
                    </div>
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
                <a href="<?= \yii\helpers\Url::to('index') ?>" id="reset"><button  id="reset1" >CБРОС</a>
            </div>
            <?php ActiveForm::end(); ?>

            <?php Pjax::begin(); ?>
            <div class="col-2">
                <?php if($dataProvider->getModels()): ?>
                <?php foreach ($dataProvider->getModels() as $product): ?>
                <div id="site_Container8">
                    <div id="Container8">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Image1">
                                    <img src="/upload/products/<?= $product->image ?>" id="Image1" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="site_Text8">
                                    <span id="site_sid19"><strong><?= $product->name ?></strong></span>
                                </div>
                                <div id="site_Text9">
                                    <span id="site_sid20">Цена: <?= $product->price?> руб.</span>
                                </div>
                                <div id="site_Text10">
                                    <span id="site_sid21">Цена со скидкой: <?= $product->price_sale ?> руб.</span>
                                </div>
                                <div id="site_Text11">
                                    <span id="site_sid22">Номинальная мощность: <?= $product->power ?> кВт</span>
                                </div>
                                <div id="site_Text12">
                                    <span id="site_sid23">Топливо:&nbsp; <?= $product->toplivo ?></span>
                                </div>
                                <div id="site_Text13">
                                    <span id="site_sid24">Напряжение: <?= $product->voltage ?></span>
                                </div>
                                <div id="site_Text13">
                                    <span id="site_sid24">Наличие ABP: <?= $product->abp ?></span>
                                </div>
                                <div id="site_Text14">
                                    <span id="site_sid25">Исполнение: <?= $product->performance ?></span>
                                </div>
                                <div id="site_Text15">
                                    <span id="site_sid26">Ссылка: <a href="<?= $product->link ?>">купить</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Container9">
                    <div id="Container9">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else:  ?>

                    <div id="site_Container9">
                        <div id="Container9">
                            <div class="row">
                                <div class="col-1">
                                    <div id="nichego" style="font-size: 20px; color: red; text-align: left;
                                    margin-left: 70px;">Ничего не найдено
                                    измеите поисковые параметы</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                  ?>
                ?>
                <!-- Пагинация-->


                <?php echo \yii\widgets\LinkPager::widget([
                        'pagination'=>$dataProvider->pagination,
                    ]
                );
                ?>
                <!-- /Пагинация-->
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>