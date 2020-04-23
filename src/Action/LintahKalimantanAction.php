<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Slim\Views\PhpRenderer;

final class LintahKalimantanAction
{
    public function __construct(PhpRenderer $view)
    {
        $this->view = $view;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ) : ResponseInterface
    {
        $view = $this->view;
        $view->render($response, 'Header.php', ['title' => 'Halaman Utama']);
        $view->render($response, 'LintahKalimantan.php');
        $view->render($response, 'Footer.php');

        return $response;
    }
}
