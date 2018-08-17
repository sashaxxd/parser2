<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 02.08.2018
 * Time: 12:13
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Parser;
use app\modules\admin\models\Parsing;
use app\modules\admin\models\Products;
use Yii;
use GuzzleHttp\Client; // подключаем Guzzle
use yii\helpers\Url;

class ParserController extends \yii\web\Controller

{

//    public $URL = 'https://www.sklad-generator.ru/elektrostancii/dizelnye/genese/';
    public $start = 0;
//    public  $end = 1;


    public  function  actionParser(){

        $xxx = new Parser();

        if($xxx->load(Yii::$app->request->post())){
//            Debug($xxx['url']);die();
            $this->parser($xxx['url'], $this->start, $xxx['end']);
            $message = 'Готово данные залиты в базу';
        }






        return $this->render('parser', [
                 'xxx' => $xxx,
            'message' => $message

            ]);
    }



    public  function parser($url, $start, $end){
        if($start < $end){
            // создаем экземпляр класса
            $client = new Client();
            // отправляем запрос к странице
            $res = $client->request('GET', $url);
            // получаем данные между открывающим и закрывающим тегами body
            $body = $res->getBody();
            // подключаем phpQuery
            $doc = \phpQuery::newDocumentHTML($body);
            //Смотрим html страницы, определяем внешний класс списка и считываем его командой find
            $res = $doc->find(".adaptive__catalog-item ");


            $i = 0;
            foreach ($res as $item) {
                $i ++;
                $item = pq($item);
                $img = $item->find(".adaptive__catalog-pic .adaptive__catalog-img")->attr('src');
                $img = 'https://www.sklad-generator.ru' . $img;
                /**
                 * Получаем название изобраения
                 */
                $filename = pathinfo( $img , PATHINFO_BASENAME );
                /**
                 * Получаем название товара
                 */
                $name = $item->find(".adaptive__catalog-name")->html();
                /**
                 * Получаем все параметры
                 */
                $params = $item->find(".adaptive__catalog-params li span");
                foreach($params as $link){
                    $result[] = pq($link)->html();
                }

//                Debug($result[0]);die();

                $toplivo = $result[0];
                  $power = $result[1];
                     $voltage = $result[2];
                        $abp = $result[3];
                            $performance =  $result[4];



                                $price = $item->find(".adaptive__catalog-price")->html();
                $price_sale = $item->find(".adaptive__catalog-price")->html();
                                    $link = $item->find(".adaptive__catalog-request")->attr('data-url');

//                Debug($link);die();





                $url= $img;
                $local = Yii::getAlias('@webroot'.'/upload/products/'. 'generator'.$filename);



                $product = new Parsing();
                $product->image = 'generator'.$filename;
                $product->name = trim($name);
                $product->toplivo = trim($toplivo);

                $power = strtok(trim($power), " ");
                $product->power = $power;
                $product->voltage =  trim($voltage);
                $product->abp = trim($abp);
                $product->performance =  trim($performance);
                $product->price = preg_replace('~\D+~','',$price);
                $product->price_sale = preg_replace('~\D+~','',$price);
                $product->link =  trim($link);
                $product->save();

                file_put_contents($local, file_get_contents($url));
            }

            $next = $doc->find('.cur')->next()->attr('href');

            if(!empty($next)){
                $start++;
                $this->parser($next, $start, $end);
            }


        }


    }



    public function actionDelete(){


        Yii::$app->db->createCommand()
            ->delete(Parsing::tableName())
            ->execute();
        return $this->render('delete', [


        ]);
    }
}