<?php

use yii\db\Migration;

/**
 * Handles the creation of table `weather_station`.
 */
class m171101_102607_create_weather_station_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('weather_station', [
            'id' => $this->primaryKey(),
            'temperature' => $this->float()->notNull()->defaultValue(0),
            'humidity' => $this->integer()->notNull()->defaultValue(0),
            'pressure' => $this->integer()->notNull()->defaultValue(700),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('weather_station');
    }
}
