<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 02.08.2018
 * Time: 14:59
 */

namespace app\controllers;

use app\modules\admin\models\Products;
use app\modules\admin\models\ProductsSearch;
use Symfony\Component\Yaml\Yaml;
use yii\web\Controller;
use yii\data\Pagination;


class ProductsController extends Controller
{
     public function actionIndex(){


         if(\Yii::$app->request->get('ProductsSearch') ){
             $searchModel = new ProductsSearch();
//
             $array = \Yii::$app->request->get('ProductsSearch');
             $new_arr = array_diff($array, array(0, false));
//             Debug($array );
//             Debug($new_arr );
//             die();

             /**
              * Выборка топлива
              */
             $searchModel->toplivo1 = $new_arr['toplivo1'];
             $searchModel->toplivo2 = $new_arr['toplivo2'];
             $searchModel->toplivo3 = $new_arr['toplivo3'];

             /**
              * Выборка abp
              */
             $searchModel->abp1 = $new_arr['abp1'];
             $searchModel->abp2 = $new_arr['abp2'];
             /**
              * Выборка цены
              */
//             $searchModel->price1 = (string)\Yii::$app->request->get('ProductsSearch')['price1'];
             $searchModel->price2 = $new_arr['price2'];
             /**
              * Выборка мощностьи
              */

             $searchModel->power2 = $new_arr['power2'];
             /**
              * Выборка напряжения
              */
             $searchModel->voltage1 = $new_arr['voltage1'];
             $searchModel->voltage2 = $new_arr['voltage2'];
             /**
              * Выборка исполнения
              */
             $searchModel->performance1 = $new_arr['performance1'];
             $searchModel->performance2 = $new_arr['performance2'];
             $searchModel->performance3 = $new_arr['performance3'];

//             var_dump(\Yii::$app->request->get());die();
             $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
             $model = $dataProvider->sort->attributes;
             $min_price = Products::find()->min('price');
             $max_price = Products::find()->max('price');
             $min_power = Products::find()->min('power');
             $max_power = Products::find()->max('power');

//             Debug(\Yii::$app->request->post());die();
             return $this->render('index', [
                 'model' => $model,
                 'searchModel' => $searchModel,
                 'dataProvider' => $dataProvider,
                 'min_price' => $min_price,
                 'max_price' => $max_price,
                 'min_power' => $min_power,
                 'max_power' => $max_power,
             ]);
         }

//         $query = Products::find();
//         $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'forcePageParam' => false, 'pageSizeParam' => false ]);
//         $products  = $query->offset($pages->offset)->limit($pages->limit)->all();
//         return $this->render('index', [
//             'products' => $products,
//             'pages' => $pages,
//         ]);



         $searchModel = new ProductsSearch();
         $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
         $model = $dataProvider->sort->attributes;

         $min_price = Products::find()->min('price');
         $max_price = Products::find()->max('price');
         $min_power = Products::find()->min('power');
         $max_power = Products::find()->max('power');

         return $this->render('index', [
             'model' => $model,
             'searchModel' => $searchModel,
             'dataProvider' => $dataProvider,
             'min_price' => $min_price,
             'max_price' => $max_price,
             'min_power' => $min_power,
             'max_power' => $max_power,

         ]);
     }
}