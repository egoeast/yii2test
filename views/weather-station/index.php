<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherStation */
/* @var $form ActiveForm */
?>
<div class="weather-station-index">

    <?=Yii::t('app', 'hl')?>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'temperature') ?>
        <?= $form->field($model, 'humidity') ?>
        <?= $form->field($model, 'pressure') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- weather-station-index -->
