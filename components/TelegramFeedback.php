<?php namespace undirezt\telegramfeedback\Components;

use Cms\Classes\ComponentBase;
use undirezt\telegramfeedback\Models\Settings as MailTelegramSettings;
use Validator;
use ValidationException;
use Input;

class TelegramFeedback extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Form Control',
            'description' => 'Контроллер формы'
        ];
    }

    public function onSend()
    {
        $firstname = Input::get('firstname');
        $surname = Input::get('surname');
        $email = Input::get('email');
        $age = Input::get('age');
        $content = Input::get('content');

        $rules = [
            'firstname' => 'required|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'email' => 'required|email',
            'age' => 'required',
            'content' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        $chat_id = '-1001140780556';
        $bot_id = '1245768877:AAFh-lU32_3fdyggpA_wguUrFIZC_utYLl4';

        $message='';

        $mArray = array(
            'имя' => $firstname,
            'Фамилия' => $surname,
            'E-mail' => $email,
            'Возраст' => $age,
            'Сообщение' => $content
        );

        foreach($mArray as $key => $value)
        {
            $message .= "<b>".$key."</b>: ".$value."%0A";
        }

        $send = fopen("https://api.telegram.org/bot{$bot_id}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", 'r');
    }
}