<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "weather_station".
 *
 * @property integer $id
 * @property double $temperature
 * @property double $humidity
 * @property integer $pressure
 */
class WeatherStation extends ActiveRecord
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
            [['temperature', 'humidity', 'pressure'], 'required'],
            [['temperature', 'humidity'], 'number'],
            [['pressure'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'temperature' => Yii::t('app', 'Temperature'),
            'humidity' => Yii::t('app', 'Humidity'),
            'pressure' => Yii::t('app', 'Pressure'),
        ];
    }
}
