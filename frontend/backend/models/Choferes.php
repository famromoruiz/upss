<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "choferes".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $gafet
 * @property string $licencia
 * @property string $clave
 * @property string $referencia
 * @property integer $id_unidad
 */
class Choferes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'choferes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'gafet', 'licencia', 'clave', 'referencia', 'id_unidad'], 'required'],
            [['id_unidad'], 'integer'],
            [['nombre', 'gafet', 'licencia'], 'string', 'max' => 50],
            [['apellidos', 'referencia'], 'string', 'max' => 60],
            [['clave'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'gafet' => 'Gafet',
            'licencia' => 'Licencia',
            'clave' => 'Clave',
            'referencia' => 'Referencia',
            'id_unidad' => 'Id Unidad',
        ];
    }
}
