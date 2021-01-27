<?php

namespace App\Controllers;

use App\Models\CollectionModel;

class Collection extends BaseController
{
    protected $collections;
    public function __construct()
    {
        $this->collection = new CollectionModel();
        helper('form');
    }

    public function index()
    {
        $collection = $this->collection->getCollection();
        $data = [
            'title' => 'My Collection',
            'collection' => $collection
        ];
        return view('pages/collection', $data);
    }

    public function add()
    {
        $model = new CollectionModel();
        $data = array(
            'idProduct' => $this->request->getPost('id'),
            'nmProduct' => $this->request->getPost('name'),
            'sampul' => $this->request->getPost('sampul'),
            'nmPengarang' => $this->request->getPost('author'),
            'display' => $this->request->getPost('link'),
        );
        $model->addColection($data);
        return redirect()->to('/Collection');
    }

    public function delete($id)
    {
        $collection = $this->Collection->deleteCollection($id);
        return redirect()->to('/Collection');
    }

}
