<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Shop',
        ];
        
        return view('shop/shop', $data);
    }
}
