<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index()
    {
        $data['title'] = "About the Developer";
        return view('about', $data);
    }
}
