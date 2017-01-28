<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "unidades".
 *
 * @property integer $id
 * @property string $marca
 * @property string $modelo
 * @property string $color
 * @property string $placas
 */
class Unidades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marca', 'modelo', 'color', 'placas'], 'required'],
            [['marca', 'modelo'], 'string', 'max' => 30],
            [['color', 'placas'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'color' => 'Color',
            'placas' => 'Placas',
        ];
    }
}
