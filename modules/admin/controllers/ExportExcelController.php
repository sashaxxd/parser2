<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 03.08.2018
 * Time: 13:59
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Parsing;
use app\modules\admin\models\Products;
use yii\web\Controller;

class ExportExcelController extends Controller
{
     public function actionExport(){

         \moonland\phpexcel\Excel::export([
             'models' => Parsing::find()->all(),
             'mode' => 'export', //default value as 'export'
             'format' => 'Excel2007',
             'columns' => ['id','image', 'name', 'toplivo', 'power', 'voltage', 'abp', 'performance', 'price',
                 'price_sale', 'link' ],
             //without header working, because the header will be get label from attribute label.
             'headers' => ['column1' => 'id','column2' => 'image','column3' => 'name','column4' => 'toplivo',
                 'column5' => 'power',
                 'column6' => 'voltage','column7' => 'abp','column8' => 'performance',
                 'column9' => 'price','column10' => 'price_sale','column11' => 'link'],
         ]);


         return $this->render('export', [


         ]);
     }
}