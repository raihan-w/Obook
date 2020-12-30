<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home | O'Book Store"
        ];
        return view('pages/home', $data);
    }
}
