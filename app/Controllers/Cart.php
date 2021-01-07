<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Cart extends BaseController
{
    protected $product;
    public function __construct()
    {
        $this->product = new ProductModel();
        helper('number');
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => "Cart | O'Book Store",
        ];
        return view('pages/cart', $data);
    }

    public function cek()
    {
        $cart = \Config\Services::cart();
        $response = $cart->contents();     
        echo '<pre>';
        print_r($response);
        echo'</pre>';
    }

    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'        => $this->request->getPost('id'),
            'qty'       => 1,
            'price'     => $this->request->getPost('price'),
            'name'      => $this->request->getPost('name'),
            'options'   => array(
                'sampul'    => $this->request->getPost('sampul'),
            )
        ));
        return redirect()->to(base_url('cart'));
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
}