<?php namespace Undirezt\Telegramfeedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUndireztTelegramfeedbackSettings extends Migration
{
    public function up()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->text('bot_id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('chat_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->integer('bot_id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('chat_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
