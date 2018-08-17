<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:35
 */
namespace app\components;




use app\modules\admin\models\ProductsSearch;
use yii\base\Widget;
use Yii;


class FilterWidget extends Widget
{


    public function run()
    {


        $searchModel = new ProductsSearch();



        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model = $dataProvider->sort->attributes;
        return $this -> render('filter', [
            'model' => $model,
            'searchModel' => $searchModel,
        ]);
    }


}