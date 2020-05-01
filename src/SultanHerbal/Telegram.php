<?php
namespace Cvar1984\SultanHerbal;

class Telegram
{
    protected const BOT_TOKEN = '';
    public const BOT_ADMIN = ['E13371984', 'sultanherbal'];
    public const BOT_USERNAME = 'SultanHerbalStoreBOT';
    public const BOT_CHAT_ID = '';
    public const BOT_DEBUG_CHAT_ID = '';
    
    public function bot(string $method, array $datas = [])
    {
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            'https://api.telegram.org/bot' . Telegram::BOT_TOKEN . '/' . $method
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }

    public static function getUpdates($updateId)
    {
        $get = Telegram::bot('getupdates', ['offset' => $updateId]);
        return @end($get['result']);
    }
}
