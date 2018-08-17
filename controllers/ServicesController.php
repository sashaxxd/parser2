<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 04.08.2018
 * Time: 19:42
 */

namespace app\controllers;


use yii\web\Controller;

class ServicesController extends Controller
{
     public  function  actionIndex(){
         return $this->render('index',[

         ]);
     }
}