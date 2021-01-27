<?php

namespace App\Models;

use CodeIgniter\Model;

class CollectionModel extends Model
{
    protected $table = 'colections';

    public function getCollection($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }
    }

    public function addColection($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function deleteCollection($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}
