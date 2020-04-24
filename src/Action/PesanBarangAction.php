<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Slim\Views\PhpRenderer;
use Cvar1984\SultanHerbal\Telegram;

final class PesanBarangAction
{
    public function __construct(PhpRenderer $view, Telegram $telegram)
    {
        $this->view = $view;
        $this->telegram = $telegram;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) : ResponseInterface
    {
        $view = $this->view;
        $method = $request->getMethod();

        if ($method == 'POST') {
            $telegram = $this->telegram;
            $args = $request->getParsedBody();
            $ip = $_SERVER['REMOTE_ADDR'];
            $details = json_decode(
                file_get_contents("http://ipinfo.io/{$ip}/json")
            );

            if (strlen($args['alamat_pemesan']) <= 5) {
                $view->render(
                    $response,
                    'header.php',
                    [
                        'title' => 'Pesan Gagal',
                    ]
                );

                $view->render(
                    $response,
                    'pesan-gagal.php',
                    [
                        'status' => 'alamat tidak valid',
                        'namaBarang' => $args['nama_barang'],
                        'jumlahBarang' => $args['jumlah_barang']
                    ]
                );

            } else {
                ob_start();
                echo "===== Orderan Baru Boss =====\n";
                echo 'Nama Pembeli: *' . $args['nama_lengkap'] . "*\n";
                echo 'Nomor Whatsapp: *' . $args['nomor_wa'] . "*\n";
                echo 'Alamat: *' . $args['alamat_pemesan'] . "*\n";
                echo 'Nama barang: *' . $args['nama_barang'] . "*\n";
                echo 'Jumlah barang: *' . $args['jumlah_barang'] . "*\n";
                echo !isset($details->city) ? "Lokasi ip: *Tidak diketahui*\n" : 'Lokasi ip: *' . $details->city . "*\n";
                echo '===== Orderan Baru Boss =====';
                $dataPembeli = ob_get_clean();

                $status = $telegram->bot(
                    'sendMessage',
                    [
                        'chat_id' => $telegram->BOT_CHAT_ID,
                        'text' => $dataPembeli,
                        'parse_mode' => 'Markdown',
                    ]
                );
            }

            if ($status['ok'] == true) {
                $view->render(
                    $response,
                    'header.php',
                    [
                        'title' => 'Pesan Sukses'
                    ]
                );

                $view->render(
                    $response,
                    'pesan-sukses.php',
                    [
                        'namaBarang' => $args['nama_barang'],
                        'jumlahBarang' => $args['jumlah_barang']
                    ]
                );

            } else {
                $view->render(
                    $response,
                    'header.php',
                    [
                        'title' => 'Pesan Gagal',
                    ]
                );

                $view->render(
                    $response,
                    'pesan-gagal.php',
                    [
                        'status' => 'Server bermasalah',
                        'namaBarang' => $args['nama_barang'],
                        'jumlahBarang' => $args['jumlah_barang']
                    ]
                );
            }
        } elseif ($method == 'GET') {
            $args = $request->getQueryParams();
            $view->render($response, 'header.php', ['title' => 'Pesan Barang']);

            if (isset($args['barang'])) {
                $view->render(
                    $response,
                    'pesan-barang.php', ['barang' => $args['barang']]);
            } else {
                $view->render($response, 'pesan-barang.php');
            }

            $view->render($response, 'footer.php');
        }
            return $response;
    }
}
