<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'account';
    protected $allowedFields = ['account_name', 'account_email', 'account_password', 'created_at'];
}
