<?php

namespace Regentonnenshop\Containers;

use Plenty\Plugin\Templates\Twig;

class RegentonnenshopItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Regentonnenshop::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}