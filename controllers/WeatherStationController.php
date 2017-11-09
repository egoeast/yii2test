<?php

namespace app\controllers;

use Yii;
use app\models\WeatherStation;
use yii\console\Controller;

class WeatherStationController extends Controller
{
    //$twig->addExtension(new Twig_Extensions_Extension_I18n());

    public function actionIndex()
    {
        \Yii::$app->language = 'ru-RU';
        $model = new WeatherStation();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
        }


        return $this->render('index.twig', ['model' => $model]);
    }

}
