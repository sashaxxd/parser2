<!---->
<!--<h1>Cпарсили --><?//= count($products)  ?><!--  насосов</h1>-->
<!---->
<!---->
<?php
//foreach ($products as $product): ?>
<!--<!-- --><?php ////  Debug($product->image)  ?>
<!--    <img src="/upload/products/--><?//= $product->image ?><!--">-->
<!--    <br>-->
<?php //endforeach; ?>


<div id="site_LayoutGrid1">
    <div id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="site_Text1">
                    <span id="site_uid0"><strong>Энерго-сан</strong></span>
                </div>
                <div id="site_Text2">
                    <span id="site_uid1"><strong>Лучшие цены на солнечные батареи </strong></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="site_Text3">
                    &nbsp;
                </div>
                <div id="site_Text4">
                    &nbsp;
                </div>
                <div id="site_Text5">
                    <span id="site_uid2"><strong>Фильтр:</strong></span>
                </div>
                <div id="site_Text6">
                    <span id="site_uid3"><strong>Топливо</strong></span><span id="site_uid4"><strong>:</strong></span>
                </div>
                <div id="site_LayoutGrid3">
                    <div id="LayoutGrid3">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Checkbox1">
                                    <input type="checkbox" id="Checkbox1" name="Checkbox1" value="on"><label for="Checkbox1"></label>
                                </div>
                                <label for="Checkbox1" id="Label1">Дизель</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid4">
                    <div id="LayoutGrid4">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Checkbox2">
                                    <input type="checkbox" id="Checkbox2" name="Checkbox2" value="on"><label for="Checkbox2"></label>
                                </div>
                                <label for="Checkbox2" id="Label2">Бензин</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid5">
                    <div id="LayoutGrid5">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Checkbox3">
                                    <input type="checkbox" id="Checkbox3" name="Checkbox3" value="on"><label for="Checkbox3"></label>
                                </div>
                                <label for="Checkbox3" id="Label3">Газ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_Text7">
                    <span id="site_uid5"><strong>Наличие ABP</strong></span><span id="site_uid6"><strong>:</strong></span>
                </div>
                <div id="site_LayoutGrid6">
                    <div id="LayoutGrid6">
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
                <div id="site_LayoutGrid7">
                    <div id="LayoutGrid7">
                        <div class="row">
                            <div class="col-1">
                                <div id="site_Checkbox5">
                                    <input type="checkbox" id="Checkbox5" name="" value="on"><label for="Checkbox5"></label>
                                </div>
                                <label for="Checkbox5" id="Label5">Нет</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <?php foreach ($products as $product): ?>
                <div id="site_LayoutGrid8">
                    <div id="LayoutGrid8">
                        <div class="row">

                            <div class="col-1">
                                <div id="site_Image1">
                                    <img src="/upload/products/<?= $product->image ?>" id="Image1" alt="">
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="site_Text8">
                                    <span id="site_uid7"><strong><?= $product->name ?></strong></span>
                                </div>
                                <div id="site_Text9">
                                    <span id="site_uid8">Цена: <?= $product->price?></span>
                                </div>
                                <div id="site_Text10">
                                    <span id="site_uid9">Цена со скидкой: <?= $product->price_sale ?></span>
                                </div>
                                <div id="site_Text11">
                                    <span id="site_uid10">Номинальная мощность: <?= $product->power ?></span>
                                </div>
                                <div id="site_Text12">
                                    <span id="site_uid11">Топливо:&nbsp; <?= $product->toplivo ?></span>
                                </div>
                                <div id="site_Text13">
                                    <span id="site_uid12">Напряжение: <?= $product->voltage ?></span>
                                </div>
                                <div id="site_Text14">
                                    <span id="site_uid13">Исполнение: <?= $product->performance ?></span>
                                </div>
                                <div id="site_Text15">
                                    <span id="site_uid14">Ссылка: <a href="<?= $product->link ?>">купить</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="site_LayoutGrid9">
                    <div id="LayoutGrid9">
                        <div class="row">
                            <div class="col-1">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- Пагинация-->
                <?php
                echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                    ]
                );
                ?>
                <!-- /Пагинация-->
            </div>

        </div>
    </div>
</div>
