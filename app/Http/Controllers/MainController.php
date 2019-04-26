<?php

namespace App\Http\Controllers;

use App\Menu;

class MainController extends Controller
{
    public static $data = [
        'pageTitle' => 'iSupplement | ',
        'errors_top' => true,

    ];
    public function __construct()
    {
        self::$data['menu'] = Menu::all()->toArray();
    }
}