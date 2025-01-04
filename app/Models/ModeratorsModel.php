<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeratorsModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['user_type', 'username ', 'password', 'user_fname', 'user_lname', 'user_email', 'user_status'];
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'username' => 'required|alpha_numeric_space|min_length[3]|max_length[20]|is_unique[users.username]',
        'user_email' => 'required|valid_email|is_unique[users.user_email]',
        'password' => 'required|min_length[6]',
        'user_fname' => 'required',
        'user_lname' => 'required',
        'user_status' => 'required|in_list[0,1,2,3]',
    ];

    protected $validationMessages = [
        'username' => [
            'is_unique' => 'The username is already taken.',
        ],
        'user_email' => [
            'is_unique' => 'The email address is already registered.',
        ],
        'user_status' => [
            'in_list' => 'The user status must be one of the following values: 0 (pending), 1 (active), 2 (paused), 3 (banned).',
        ],
    ];

    protected $skipValidation = false;

    public function addUser($data)
    {
        if ($this->save($data)) {
            return $this->insertID();
        }
        return false;
    }
    
    public function updateUser($id, $data)
    {
        if ($this->update($id, $data)) {
            return true;
        }
        return false;
    }

    public function deleteUser($id)
    {
        if ($this->delete($id)) {
            return true;
        }
        return false;
    }

    public function searchUser($firstName, $lastName, $email, $username)
    {
        $builder = $this->builder();

        if ($firstName) {
            $builder->like('user_fname', $firstName);
        }
        if ($lastName) {
            $builder->like('user_lname', $lastName);
        }
        if ($email) {
            $builder->like('user_email', $email);
        }
        if ($username) {
            $builder->like('username', $username);
        }

        return $builder->get()->getResult();
        
    }

    public function getAllUsers()
    {
        return $this->asObject()->findAll();
    }

    public function getStatusLabel($status)
    {
        switch ($status) {
            case 0:
                return '<span class="text-warning"><i class="fas fa-circle f-10 m-r-10"></i> Pending</span>';
            case 1:
                return '<span class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Active</span>';
            case 2:
                return '<span class="text-primary"><i class="fas fa-circle f-10 m-r-10"></i> Paused</span>';
            case 3:
                return '<span class="text-danger"><i class="fas fa-circle f-10 m-r-10"></i> Banned</span>';
            default:
                return '<span class="text-muted"><i class="fas fa-circle f-10 m-r-10"></i> Unknown</span>';
        }
    }
}
