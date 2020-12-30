<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Product extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Product | O'Book Store"
        ];
        return view('pages/product', $data);
    }
}