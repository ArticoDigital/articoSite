<?php

namespace Artico\Services;

use Illuminate\Support\Facades\Auth;

class MenuBack
{
    private $menu;

    function __construct()
    {
        $this->menu = $this->menuConfig();
    }

    function getMenu(){
        return $this->menu;
    }

    private function menuConfig(){
        return [
            'Clientes' => [
                'route' => 'customer',
                //'roles' => [1, 2, 3, 4, 5, 6],
                'class' => 'bussiness'
            ],
            'Cargos' => [
                'route' => 'position',
                'class' => 'employment'
            ],
        ];
    }
}

