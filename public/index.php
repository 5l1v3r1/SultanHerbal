<?php
use Slim\App;
use Slim\Container;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer as Views;
use Cvar1984\SultanHerbal\Telegram;

require '../vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ]
];

$container = new Container($config);
$app = new App($container);
$container = $app->getContainer();
// Add container to the application
$templateVariables = [
    'vendorName' => 'Sultan Herbal Store',
    'lintahPapua' => 'lintah-papua',
    'lintahKalimantan' => 'lintah-kalimantan',
    'hajarJahanamSuper' => 'hajar-jahanm-super',
    'pesanBarang' => 'pesan-barang'
];
$container['view'] = new Views('../templates/', $templateVariables);
$container['telegram'] = new Telegram();
$app->get(
    '/',
    function (Request $request, Response $response) {
        $view = $this->get('view');
        $view->render($response, 'Header.php',
            [
                'title'=>'Halaman Utama'
            ]
        );
        $view->render($response, 'HalamanUtama.php');
        return $view->render($response, 'Footer.php');
    }
);
$app->get(
    '/hajar-jahanm-super',
    function (Request $request, Response $response) {
        $view = $this->get('view');
        $view->render($response, 'Header.php',
            [
                'title'=>'Hajar Jahanam Super'
            ]
        );
        $view->render($response, 'HajarJahanamSuper.php');
        return $view->render($response, 'Footer.php');
    }
);
$app->get(
    '/lintah-papua',
    function (Request $request, Response $response) {
        $view = $this->get('view');
        $view->render($response, 'Header.php',
            [
                'title'=>'Lintah Papua'
            ]
        );
        $view->render($response, 'LintahPapua.php');
        return $view->render($response, 'Footer.php');
    }
);
$app->get(
    '/lintah-kalimantan',
    function (Request $request, Response $response) {
        $view = $this->get('view');
        $view->render($response, 'Header.php',
            [
                'title'=>'Lintah Kalimantan'
            ]
        );
        $view->render($response, 'LintahKalimantan.php');
        return $view->render($response, 'Footer.php');
    }
);
$app->post(
    '/pesan-barang',
    function (Request $request, Response $response) {
        $view = $this->get('view');
        $telegram = $this->get('telegram');
        $args = $request->getParsedBody();
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        
        ob_start();
        echo "===== Orderan Baru Boss =====\n";
        echo 'Nama Pembeli: *' . $args['nama_lengkap'] . "*\n";
        echo 'Nomor Whatsapp: *' . $args['nomor_wa'] . "*\n";
        echo 'Alamat: *' . $args['alamat_pemesan'] . "*\n";;
        echo 'Nama barang: *' . $args['nama_barang'] . "*\n";;
        echo 'Jumlah barang: *' . $args['jumlah_barang'] . "*\n";
        //echo 'Lokasi ip: *' . empty($details->city) ? "Tidak diketahui*\n" : $details->city . "*\n";
        echo '===== Orderan Baru Boss =====';
        
        $dataPembeli = ob_get_clean();
        $status = $telegram->bot('sendMessage',
            [
                'chat_id' => '-485469824',
                'text' => $dataPembeli,
                'parse_mode' => 'Markdown'
            ]);
        if($status) {
            $view->render($response, 'Header.php',
                [
                    'title'=>'Pesan Sukses'
                ]
            );
            $view->render($response, 'PesanSukses.php',
                [
                    'namaBarang' => $args['nama_barang'],
                    'jumlahBarang' => $args['jumlah_barang']
                ]
            );
            return $view->render($response, 'Footer.php');
        }
        else {
            $view->render($response, 'Header.php',
                [
                    'title'=>'Pesan Gagal'
                ]
            );
            $view->render($response, 'PesanGagal.php',
                [
                    'namaBarang' => $args['nama_barang'],
                    'jumlahBarang' => $args['jumlah_barang']
                ]
            );
            return $view->render($response, 'Footer.php');
        }
    }
);
$app->get(
    '/pesan-barang',
    function (Request $request, Response $response) {
        $view = $this->get('view');
        $args = $request->getQueryParams();
        if(isset($args['barang'])) {
            $view->render($response, 'Header.php',
                [
                    'title'=>'Pesan Barang'
                ]
            );
            $view->render($response, 'PesanBarang.php',
                [
                    'barang' => $args['barang']
                ]
            );
            return $view->render($response, 'Footer.php');
        }
        else {
            $view->render($response, 'Header.php',
                [
                    'title'=>'Pesan Barang'
                ]
            );
            $view->render($response, 'PesanBarang.php');
            return $view->render($response, 'Footer.php');
        }
    }
);
$app->run();
