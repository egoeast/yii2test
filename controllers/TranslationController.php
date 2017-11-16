<?php

namespace app\controllers;

use Google\Cloud\Translate\TranslateClient;

class TranslationController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $text = 'motherfucker';
        $lang = 'ru';
        //$translate = new TranslateClient();
        //$result = $translate->translate($text, [
        //    'target' => $lang,
        //]);
        $params = array( 'key' => 'trnsl.1.1.20171116T103815Z.de890509a05594eb.07ad8f63c2e9da3b843adc43104ebcde9bb0e6d4
', 'text' => $text, 'lang' => 'en-ru',);
        $query = http_build_query($params);
        $response = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?'.$query);

        echo $query;

        $data = json_decode($response, true);
        $text = $data['text'][0];
        echo $text;

        //echo $result;
        //return $this->render('index');
    }

}
