<?php

namespace Regentonnenshop\Containers;

use Plenty\Plugin\Templates\Twig;

class RegentonnenshopContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Regentonnenshop::Stylesheet');
    }
}