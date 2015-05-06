<?php
namespace Neochic\SlimTools\Service;

class TwigView extends \Slim\Views\Twig {
    public function __construct(array $twigConfig, array $coreConfig) {
        $this->parserOptions['debug'] = $coreConfig['mode'] === 'dev'; //activate debug mode only for development mode
        $this->parserOptions['cache'] = $twigConfig['cacheDir'];
        $this->parserExtensions = array_slice(func_get_args(), 2);
        $this->twigTemplateDirs = $twigConfig['templateDirs'];
    }
}