<?php

namespace app\traits;

use core\Twig;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

trait View
{

    private function twig()
    {
        $twig = new Twig;
        $loadTwig = $twig->loadTwig();
        $twig->LoadExtensions();
        return $loadTwig;
    }

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function view($data, $view)
    {
        $template = $this->twig()->load(str_replace('.', '/', $view) . '.html');
        return $template->display($data);
    }
}