<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="content">
<div id="site_Container10">
    <div id="Container10">
        <div class="row">
            <div class="col-1">
                <div id="site_ResponsiveMenu1">
                    <label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title"><span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="ResponsiveMenu1-submenu">
                    <ul class="ResponsiveMenu1" id="ResponsiveMenu1">
                        <li><a href="<?= \yii\helpers\Url::Home() ?>">&#1054;&nbsp;&#1050;&#1054;&#1052;&#1055;&#1040;&#1053;&#1048;&#1048;</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['products/index']) ?>">&#1050;&#1040;&#1058;&#1040;&#1051;&#1054;&#1043;</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['pages/services']) ?>">&#1059;&#1057;&#1051;&#1059;&#1043;&#1048;</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['pages/contact']) ?>">&#1050;&#1054;&#1053;&#1058;&#1040;&#1050;&#1058;&#1067;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div id="site_Text22">
                    <span id="site_sid0">тел: +594 000 000 000<br>ООО &quot;Энерго-сан&quot;&nbsp; г.Москва ул.&nbsp;&nbsp; Ленина 13<br>С 9-00 до&nbsp; 18-00 воскресенье выходной </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_Container1">
    <div id="Container1">
        <div class="row">
            <div class="col-1">
                <div id="site_Text1">
                    <span id="site_sid1"><strong>Энерго-сан</strong></span>
                </div>
                <div id="site_Text2">
                    <span id="site_sid2"><strong>Лучшие цены на солнечные батареи </strong></span><br>
                    <span id="site_sid2"><strong>Акция до конца августа – солнечные батареи.</strong></span><br>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="site_Container21">
    <div id="Container21">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>


        <?= $content ?>
    </div>
    <div class="footer">
<div id="site_Container20">
    <div id="Container20">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div id="site_Container19">
    <div id="Container19">
        <div class="row">
            <div class="col-1">
                <div id="site_Text25">
                    <span id="site_sid27">© 2018 все права защищены</span><span id="site_sid28"><br></span>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-3">
                <div id="site_Text24">
                    <span id="site_sid29">+7 (495) 505-95-05<br></span><span id="site_sid30">ООО &quot;Энерго-сан&quot;&nbsp; г.Москва ул.&nbsp;&nbsp; Ленина 13<br>С 9-00 до&nbsp; 18-00 воскресенье выходной <br></span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
