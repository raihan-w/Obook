<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';

    public function getProduct($slug = false)
    {
        $this->select('product.*, pengarang.nmPengarang as pengarang, kategori.nmKategori as kategori');
        $this->join('pengarang', 'pengarang.id = product.pengarang');
        $this->join('kategori', 'kategori.id = product.kategori');
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
