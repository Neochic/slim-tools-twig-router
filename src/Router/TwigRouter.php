<?php
namespace Neochic\SlimTools\Router;

class TwigRouter extends Router
{
    public function route()
    {
        $this->attachRoute('twig');
    }

    protected function render($data, $controller, $action)
    {
        $this->slim->contentType('text/html');
        $this->template = $controller.'/'.$action.'.twig';
        parent::render($data);
    }
}