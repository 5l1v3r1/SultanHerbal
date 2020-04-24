<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Slim\Views\PhpRenderer;

final class LintahPapuaAction
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
        $view->render($response, 'header.php', ['title' => 'Lintah Papua']);
        $view->render($response, 'lintah-papua.php');
        $view->render($response, 'footer.php');

        return $response;
    }
}
