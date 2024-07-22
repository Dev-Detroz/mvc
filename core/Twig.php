<?php

namespace core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Twig
{
    private $twig;
    private $functions = [];

    public function loadTwig(): Environment
    {
        $this->twig = new Environment($this->loadViews(), [
            'debug' => true,
//            'cache' => '/cache',
            'auto_load' => true
        ]);

        return $this->twig;
    }

    private function loadViews()
    {
        return new FilesystemLoader('../app/views');
    }
}