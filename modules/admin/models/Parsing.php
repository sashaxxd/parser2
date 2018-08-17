<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "parsing".
 *
 * @property string $id
 * @property string $image
 * @property string $name
 * @property string $toplivo
 * @property string $power
 * @property string $voltage
 * @property string $abp
 * @property string $performance
 * @property string $link
 * @property string $price
 * @property string $price_sale
 */
class Parsing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parsing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'name', 'toplivo', 'power', 'voltage', 'abp', 'performance', 'link', 'price', 'price_sale'], 'required'],
            [['image', 'name', 'toplivo', 'power', 'voltage', 'abp', 'performance', 'link', 'price', 'price_sale'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'name' => 'Name',
            'toplivo' => 'Toplivo',
            'power' => 'Power',
            'voltage' => 'Voltage',
            'abp' => 'Abp',
            'performance' => 'Performance',
            'link' => 'Link',
            'price' => 'Price',
            'price_sale' => 'Price Sale',
        ];
    }
}
