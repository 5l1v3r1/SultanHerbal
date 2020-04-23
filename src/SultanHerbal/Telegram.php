<?php
namespace Cvar1984\SultanHerbal;

class Telegram
{
    protected const BOT_TOKEN = '1076259406:AAGLUAKD8hr-o8HoBFWGNL56HXq7L2Sr8ho';
    public const BOT_ADMIN = ['Cvar1984', 'E13371984', 'sultanherbal'];
    public const BOT_USERNAME = 'SultanHerbalStoreBOT';

    function __construct()
    {
        set_time_limit(0);
        ignore_user_abort(false);
        ini_set('max_execution_time', 0); //exec time
        ini_set('memory_limit', -1); //memmory limit
    }
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
    public static function writeFiles(string $data, string $name)
    {
        $write = @fopen($name, 'a');
        if ($write) {
            fprintf($write, '%s%s', $data, PHP_EOL);
            fclose($write);
        } else {
            fprintf(STDERR, 'Error : can\'t write %s%s', $name, PHP_EOL);
        }
    }
}
