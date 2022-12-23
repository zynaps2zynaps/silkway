<?php

namespace App;

// различные полезные инструменты
class Telega {


    // my telegram ID 76608309





    // отправка сообщения в телеграм
    public static function telegramMessageSilkWay($text)
    {
        // токен бота silkway_informer_bot
        define('TELEGRAM_TOKEN', '5802022392:AAF7-ZriuCik0JQ7wpvgBTnJ8mpljijKrqw');

        // массив с ChatID людей, которые получают уведомление в телеграм в боте silkway_informer_bot
        $chat_id = [
            'danya' => '76608309', // Даня
            'nadya' => '26865822', // Надя
            'luda' => '300474326', // Люда
            'farrukh' => '1274941081', // Фаррух
        ];

        foreach ($chat_id as $key => $value) {
            // отправка сообщения
            $ch = curl_init();
            curl_setopt_array(
                $ch,
                array(
                    CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
                    CURLOPT_POST => TRUE,
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_TIMEOUT => 10,
                    CURLOPT_POSTFIELDS => array(
                        'chat_id' => $value,
                        'text' => $text,
                    ),
                )
            );
            curl_exec($ch);
            // конец отправки сообщение
        }
    }



}