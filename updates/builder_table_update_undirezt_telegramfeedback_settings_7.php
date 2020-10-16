<?php namespace Undirezt\Telegramfeedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUndireztTelegramfeedbackSettings7 extends Migration
{
    public function up()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->string('bot_id', 10)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('chat_id', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->smallInteger('bot_id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->smallInteger('chat_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
