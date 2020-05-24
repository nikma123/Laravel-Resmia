<?php

use App\Menu;




function menu()
{
    $listadoMenu = Menu::all();
    return $listadoMenu;
}

