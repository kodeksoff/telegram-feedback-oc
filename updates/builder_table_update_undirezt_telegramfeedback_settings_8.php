<?php namespace Undirezt\Telegramfeedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUndireztTelegramfeedbackSettings8 extends Migration
{
    public function up()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->string('bot_id', 255)->change();
            $table->string('chat_id', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->string('bot_id', 10)->change();
            $table->string('chat_id', 10)->change();
        });
    }
}
