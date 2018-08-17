<?php
/**
 * Created by PhpStorm.
 * User: saha
 * Date: 03.08.2018
 * Time: 16:09
 */

namespace app\modules\admin\models;


use yii\base\Model;


class Parser extends Model
{
    /**
     * @var UploadedFile
     */


    public $end;
    public  $url;

    public function rules()
    {
        return [
            [['end', 'url'], 'required'],
            [['end', 'url'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'end' => 'Количество страниц для парсинга',
            'url' => 'Страница',

        ];
    }




}