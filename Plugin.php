<?php namespace Undirezt\TelegramFeedback;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \undirezt\telegramfeedback\components\TelegramFeedback::class => 'telegramFeedbacktestc'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => '2335',
                'description' => '63456346',
                'category'    => SettingsManager::CATEGORY_NOTIFICATIONS,
                'icon'        => 'icon-envelope-o',
            ],
        ];
    }

}
