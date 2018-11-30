<?php

namespace Regentonnenshop\Containers;

use Plenty\Plugin\Templates\Twig;

class RegentonnenshopItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Regentonnenshop::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}