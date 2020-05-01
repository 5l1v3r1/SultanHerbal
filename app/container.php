<?php

use Psr\Container\ContainerInterface;
use Selective\Config\Configuration;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Middleware\ErrorMiddleware;
use Slim\Views\PhpRenderer;

return [
    Configuration::class => function () {
        return new Configuration(require __DIR__ . '/settings.php');
    },
    App::class => function (ContainerInterface $container) {
        AppFactory::setContainer($container);
        $app = AppFactory::create();

        // Optional: Set the base path to run the app in a sub-directory
        // The public directory must not be part of the base path
//        $app->setBasePath('/SultanHerbal');

        return $app;
    },
    ErrorMiddleware::class => function (ContainerInterface $container) {
        $app = $container->get(App::class);
        $settings = $container->get(Configuration::class)->getArray('error_handler_middleware');

        return new ErrorMiddleware(
            $app->getCallableResolver(),
            $app->getResponseFactory(),
            (bool)$settings['display_error_details'],
            (bool)$settings['log_errors'],
            (bool)$settings['log_error_details']
        );
    },

    PhpRenderer::class => function(ContainerInterface $container) {
        $templateVariables = [
            'appName' => 'Sultan Herbal Store',
            'lintahPapua' => 'lintah-papua',
            'lintahKalimantan' => 'lintah-kalimantan',
            'hajarJahanamSuper' => 'hajar-jahanam-super',
            'pesanBarang' => 'pesan-barang',
        ];

        return new PhpRenderer('../templates', $templateVariables);
    },
];
