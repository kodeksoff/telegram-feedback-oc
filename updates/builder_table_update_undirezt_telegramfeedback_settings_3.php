<?php namespace Undirezt\Telegramfeedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUndireztTelegramfeedbackSettings3 extends Migration
{
    public function up()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->bigInteger('chat_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('undirezt_telegramfeedback_settings', function($table)
        {
            $table->integer('chat_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
