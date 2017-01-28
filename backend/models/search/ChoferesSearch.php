<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Choferes;

/**
 * ChoferesSearch represents the model behind the search form about `backend\models\Choferes`.
 */
class ChoferesSearch extends Choferes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_unidad'], 'integer'],
            [['nombre', 'apellidos', 'gafet', 'licencia', 'clave', 'referencia'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Choferes::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_unidad' => $this->id_unidad,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'gafet', $this->gafet])
            ->andFilterWhere(['like', 'licencia', $this->licencia])
            ->andFilterWhere(['like', 'clave', $this->clave])
            ->andFilterWhere(['like', 'referencia', $this->referencia]);

        return $dataProvider;
    }
}
