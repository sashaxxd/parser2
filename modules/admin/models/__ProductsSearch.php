<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `app\modules\admin\models\Products`.
 */
class ProductsSearch extends Products
{
    public $toplivo1;
    public $toplivo2;
    public $toplivo3;
    public $abp1;
    public $abp2;

    public $price2;

    public $power2;
    public $voltage1;
    public $voltage2;
    public $performance1;
    public $performance2;
    public $performance3;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['image', 'name', 'toplivo',  'power',  'voltage', 'abp',  'performance',   'link', 'price',  'price_sale'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'defaultPageSize' => 3,
            ],
            'sort'=> ['defaultOrder' => ['id'=>SORT_ASC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions



        if(empty(\Yii::$app->request->get('ProductsSearch'))
        ){

            $query->andFilterWhere(['between', 'power', $this->power, $this->power2])
                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
            $query = Products::find();
        }
        /**
         * Ищем только по топливу
         */
        if(

            $this->toplivo1 == true
            || $this->toplivo2 == true
            || $this->toplivo3 == true

            && $this->abp1 == false
            && $this->abp2 == false
            && $this->voltage1 == false
            && $this->voltage2 == false
            && $this->performance1 == false
            && $this->performance2 == false
            && $this->performance3 == false
        ){


            $query->andFilterWhere(['toplivo' =>
                [
                    $this->toplivo1,
                    $this->toplivo2,
                    $this->toplivo3,


                ]
            ])

                ->andFilterWhere(['between', 'power', $this->power, $this->power2])
                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
        }
        /**
         * Ищем только по абп
         */
        elseif(

            $this->abp1 == true
            || $this->abp2 == true

            && $this->toplivo1 == false
            && $this->toplivo2 == false
            && $this->toplivo3 == false
            && $this->voltage1 == false
            && $this->voltage2 == false
            && $this->performance1 == false
            && $this->performance2 == false
            && $this->performance3 == false


        ){
//           Debug(\Yii::$app->request->get());die();

            $query->andFilterWhere(['abp' =>
                [
                    $this->abp1,
                    $this->abp2,



                ]
            ])

                ->andFilterWhere(['between', 'power', $this->power, $this->power2])
                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
        }
        /**
         * Ищем только по напряжению
         */
        elseif(

            $this->voltage1 == true
            ||$this->voltage2 == true

            && $this->toplivo1 == false
            && $this->toplivo2 == false
            && $this->toplivo3 == false
            && $this->abp1 == false
            && $this->abp2 == false
            && $this->performance1 == false
            && $this->performance2 == false
            && $this->performance3 == false


        ){
//           Debug(\Yii::$app->request->get());die();

            $query->andFilterWhere(['voltage' =>
                [
                    $this->voltage1,
                    $this->voltage2,



                ]
            ])

                ->andFilterWhere(['between', 'power', $this->power, $this->power2])
                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
        }
        /**
         * Ищем только по исполнению
         */
        elseif(

            $this->performance1 == true
            ||$this->performance2 == true
            ||$this->performance3 == true


            && $this->toplivo1 == false
            && $this->toplivo2 == false
            && $this->toplivo3 == false
            && $this->abp1 == false
            && $this->abp2 == false
            && $this->voltage1 == false
            && $this->voltage2 == false



        ){


            $query->andFilterWhere(['performance' =>
                [
                    $this->performance1,
                    $this->performance2,
                    $this->performance3,



                ]
            ])

                ->andFilterWhere(['between', 'power', $this->power, $this->power2])
                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);
        }

        else{
            $query->andFilterWhere(['toplivo' =>
                [
                    $this->toplivo1,
                    $this->toplivo2,
                    $this->toplivo3,

                ]
            ])
                ->andFilterWhere(['abp' =>
                    [
                        $this->abp1,
                        $this->abp2,


                    ]
                ])
                ->andFilterWhere(['voltage' =>
                    [
                        $this->voltage1,
                        $this->voltage2,


                    ]
                ])
                ->andFilterWhere(['performance' =>
                    [
                        $this->performance1,
                        $this->performance2,
                        $this->performance3,

                    ]
                ])
                ->andFilterWhere(['between', 'power', $this->power, $this->power2])
                ->andFilterWhere(['between', 'price', $this->price, $this->price2]);

        }




        return $dataProvider;
    }
}
