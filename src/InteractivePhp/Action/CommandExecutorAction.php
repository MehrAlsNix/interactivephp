<?php

namespace MehrAlsNix\InteractivePhp\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\ZendView\ZendViewRenderer;

class CommandExecutorAction
{
    private $router;

    private $template;

    public function __construct(Router\RouterInterface $router, Template\TemplateRendererInterface $template = null)
    {
        $this->router   = $router;
        $this->template = $template;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $data = [];

        $data = ['form' => new CommandExecutorFormFactory()];

        return new HtmlResponse($this->template->render('app::command-executor', $data));
    }
}
