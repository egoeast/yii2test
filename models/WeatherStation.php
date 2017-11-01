<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weather_station".
 *
 * @property integer $id
 * @property double $tmp
 * @property double $hum
 * @property integer $pres
 */
class WeatherStation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weather_station';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tmp', 'hum', 'pres'], 'required'],
            [['tmp', 'hum'], 'number'],
            [['pres'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tmp' => 'Tmp',
            'hum' => 'Hum',
            'pres' => 'Pres',
        ];
    }
}
