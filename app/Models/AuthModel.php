<?php

namespace App\Models;

use \CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table      = 'data_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_dpn', 'nama_blkng', 'jenkel', 'email', 'password'];
    protected $useTimestamps = true;


    public function login($email, $password)
    {
        return $this->db->table('data_user')->where([
            'email' => $email,
            'password' => $password
        ])->get()->getRowArray();
    }

    //--------------------------------------------------------------------

}
