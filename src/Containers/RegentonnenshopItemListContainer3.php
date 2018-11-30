<?php

namespace Regentonnenshop\Containers;

use Plenty\Plugin\Templates\Twig;

class RegentonnenshopItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Regentonnenshop::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
