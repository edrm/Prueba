<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cita".
 *
 * @property integer $id
 * @property string $objetivo
 * @property boolean $bitAcompaniapapa
 * @property integer $nroAsistente
 * @property string $fecha
 * @property string $hora
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nroAsistente'], 'integer'],
            [['bitAcompaniapapa'], 'boolean'],
            [['fecha', 'hora'], 'safe'],
            [['objetivo'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'objetivo' => 'Objetivo',
            'bitAcompaniapapa' => 'Es Acompañado por Papa',
            'nroAsistente' => 'Nro Asistentes',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
        ];
    }
}
