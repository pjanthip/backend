<?php
namespace App\Controllers\Administrator;

use App\Controllers\BaseController;
use App\Models\ModeratorsModel;

class Moderators extends BaseController
{
    protected $is_admin;
    protected $is_logged_in;
    protected $userModel;

    public function __construct()
    {
        parent::__construct();
        $this->system_locate = 'systems/administrator/moderators/';
        $this->userModel = new ModeratorsModel();
        $this->is_logged_in = $this->isLoggedIn();
        $this->is_admin = ($this->is_logged_in)? $this->isAdministrator():false;
    }

    public function index()
    {
        $this->registerUser();
    }

    public function registerUser()
    {
        $head_title = lang($this->lang.'.menus.default.register');
        $breadcrumb = $this->generateBreadcrumb([
            ['title' => lang($this->lang.'.menus.default.moderators'), 'url' => 'javascript: void(0)'],
            ['title' => lang($this->lang.'.menus.default.register'), 'url' => '']
        ]);
        $page = 'moderators_register_user';
        $this->check_first(true, $head_title, $breadcrumb, $page);
        
        return view($this->system_locate.'register_user', $this->data);
    }

    public function checkUser()
    {
        $head_title = lang($this->lang.'.menus.default.check_user');
        $breadcrumb = $this->generateBreadcrumb([
            ['title' => lang($this->lang.'.menus.default.moderators'), 'url' => 'javascript: void(0)'],
            ['title' => lang($this->lang.'.menus.default.check_user'), 'url' => '']
        ]);
        $page = 'moderators_check_user';
        $this->check_first(true, $head_title, $breadcrumb, $page);
        return view($this->system_locate.'check_user', $this->data);
    }

    public function searchUserData(){
        $firstName = $this->request->getPost('firstName');
        $lastName = $this->request->getPost('lastName');
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');

        if ($firstName || $lastName || $email || $username) {
            $users = $this->userModel->searchUser($firstName, $lastName, $email, $username);
            if ($users) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Data found.',
                    'data' => view($this->system_locate.'search_result', ['users' => $users , 'lang' => $this->lang])
                ]);
            } else {
                // ถ้าไม่พบข้อมูล
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => lang($this->lang.'.user_not_found')
                ]);
            }
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => lang($this->lang.'.page.searchUser.provide_at_least')
            ]);
        }
    }

    public function usersList()
    {
        $head_title = lang($this->lang.'.menus.default.user_list');
        $breadcrumb = $this->generateBreadcrumb([
            ['title' => lang($this->lang.'.menus.default.moderators'), 'url' => 'javascript: void(0)'],
            ['title' => lang($this->lang.'.menus.default.user_list'), 'url' => '']
        ]);
        $page = 'moderators_user_list';
        $this->check_first(true, $head_title, $breadcrumb, $page);
        
        $this->data['UserList'] = $this->userModel->getAllUsers();
        foreach ($this->data['UserList'] as &$user) {
            $user->status_label = $this->userModel->getStatusLabel($user->user_status);
        }

        return view($this->system_locate.'list_users', $this->data);
    }

    public function listLogs()
    {
        $head_title = lang($this->lang.'.menus.default.user_logs');
        $breadcrumb = $this->generateBreadcrumb([
            ['title' => lang($this->lang.'.menus.default.moderators'), 'url' => 'javascript: void(0)'],
            ['title' => lang($this->lang.'.menus.default.user_logs'), 'url' => '']
        ]);
        $page = 'moderators_user_logs';
        $this->check_first(true, $head_title, $breadcrumb, $page);

        return view($this->system_locate.'list_logs', $this->data);
    }
}
?>