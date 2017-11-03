<?php

namespace app\controllers;

use Yii;
use app\models\WeatherStation;
use yii\console\Controller;

class WeatherStationController extends Controller
{
    public function actionIndex()
    {
        $model = new WeatherStation();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
        }

        return $this->render('index', ['model' => $model]);
    }

}
