<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/hajar-jahanam-super', \App\Action\HajarJahanamSuperAction::class);
    $app->get('/lintah-papua', \App\Action\LintahPapuaAction::class);
    $app->get('/lintah-kalimantan', \App\Action\LintahKalimantanAction::class);
    $app->post('/pesan-barang', \App\Action\PesanBarangAction::class);
    $app->get('/pesan-barang', \App\Action\PesanBarangAction::class);
};
