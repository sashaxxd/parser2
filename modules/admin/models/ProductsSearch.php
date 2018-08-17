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

        else

        {

            if($this->toplivo1 || $this->toplivo2 || $this->toplivo3) {
                $query->andFilterWhere([
                    'toplivo' => [
                        $this->toplivo1,
                        $this->toplivo2,
                        $this->toplivo3,
                    ],


                ]);
            }
//            Debug($this->abp1);
//            Debug($this->abp2);
            if($this->abp1 || $this->abp2){
                $query->andFilterWhere([

                    'abp' => [
                        $this->abp1,
                        $this->abp2,

                    ],
                ]);
            }
            if($this->voltage1 || $this->voltage2){
                $query->andFilterWhere([

                    'voltage' => [
                        $this->voltage1,
                        $this->voltage2,

                    ],
                ]);
            }
            if($this->performance1 || $this->performance2 || $this->performance3){
                $query->andFilterWhere([

                    'performance' => [
                        $this->performance1,
                        $this->performance2,
                        $this->performance3,

                    ],
                ]);
            }
            if($this->power || $this->power2 || $this->price || $this->price2){
                $query->andFilterWhere(['between', 'power', $this->power, $this->power2])
                    ->andFilterWhere(['between', 'price', $this->price, $this->price2]);

            }







    }




        return $dataProvider;
    }
}
