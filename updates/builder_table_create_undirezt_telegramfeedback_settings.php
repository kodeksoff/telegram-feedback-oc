<?php namespace Undirezt\Telegramfeedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUndireztTelegramfeedbackSettings extends Migration
{
    public function up()
    {
        Schema::create('undirezt_telegramfeedback_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('bot_id');
            $table->integer('chat_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('undirezt_telegramfeedback_settings');
    }
}
