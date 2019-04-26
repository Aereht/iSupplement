<?php

namespace App\Http\Controllers;

use App\Content;

class PagesController extends MainController
{

    public function home()
    {
        self::$data['pageTitle'] .= ' Home Page';
        return view('content.home', self::$data);

    }
    public function content($url)
    {
        Content::getAll($url, self::$data);
        return view('content.content', self::$data);
    }

}