<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        
        return view('home/home', $data);
    }
    
    public function contact_us()
    {
        $data = [
            'title' => 'Contact-us',
        ];
        
        return view('contact-us/contact-us', $data);
    }
}
