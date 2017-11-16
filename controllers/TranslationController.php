<?php

namespace app\controllers;

//use Google\Cloud\Translate\TranslateClient;
use yii\console\Controller;
use app\models\WeatherStation;

class TranslationController extends Controller
{
    public function yandexTranslate($text, $lang)
    {
        $apiKey = 'trnsl.1.1.20171116T103815Z.de890509a05594eb.07ad8f63c2e9da3b843adc43104ebcde9bb0e6d4';
        $params = array( 'key' => $apiKey, 'text' => $text, 'lang' => $lang,);
        $query = http_build_query($params);
        $response = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?'.$query);
        $data = json_decode($response, true);
        $text = $data['text'][0];
        return $text;
    }

    public function actionIndex()
    {
        $text = 'ProTip! Updating your profile with your name, location, and a profile picture helps other GitHub users get to know you.';
        $lang = 'en-ru';
        $result = $this->yandexTranslate($text, $lang);

        $model = new WeatherStation();
        return $this->render('index.twig', ['result' => $result, 'model' => $model]);
    }

}
