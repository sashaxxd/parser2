<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 02.08.2018
 * Time: 14:59
 */

namespace app\controllers;

use app\modules\admin\models\Pages;
use app\modules\admin\models\Products;
use yii\web\Controller;
use yii\data\Pagination;


class PagesController extends Controller
{


    public function actionServices(){

        $services = Pages::findOne('2');
        return $this->render('services', [
            'services' => $services,
        ]);
    }

    public function actionContact(){

        $contact = Pages::findOne('3');
        return $this->render('contact', [
            'contact' => $contact,
        ]);
    }
}