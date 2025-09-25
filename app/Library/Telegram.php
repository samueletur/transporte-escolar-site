<?php

namespace App\Library;

use Telegram\Bot\Api as TelegramApi;

class Telegram
{
    public static function send($name, $message = [])
    {
        $message['url'] = url()->full();

        $telegram = new TelegramApi(env('TELEGRAM_BOT_TOKEN'));

        $message = self::jsonToText($message);

        $telegram->sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'), 
            'text' => "<b>{$name}</b>\n{$message}",
            'parse_mode' => 'HTML',
        ]);
    }

    public static function jsonToText($message)
    {
        $message = json_encode($message, JSON_UNESCAPED_UNICODE);
        $message = str_replace(['<', '>'], ['&lt;', '&gt;'], $message);
        $message = self::traitMessage(json_decode($message, true));

        if (mb_strlen($message) > 4000) {
            $message = mb_substr($message, 0, 4000) . "...";
        }

        return $message;
    }

    public static function traitMessage($arr)
    {
        $text = '';

        foreach ($arr as $key => $value) {
            if (is_array($value) == false) {
                $text .= "{$key}: {$value}\n";
            } else {
                $text .= "\n{$key}:\n" . self::traitMessage($value) . "\n";
            }
        }

        return $text;
    }
}
