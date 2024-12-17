<?php
namespace App\Controllers\Administrator;

use App\Controllers\BaseController;

class Moderators extends BaseController
{
    protected $is_admin;
    public function __construct()
    {
        parent::__construct();
        $this->system_locate = 'systems/administrator/moderators/';
        if (!$this->isLoggedIn()) {
            return redirect()->to('/auth');
        }
        $this->is_admin = $this->isAdministrator();
    }

    public function index()
    {
        

        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang.'.menus.default.dashboard'),
            'breadcrumb_item' => lang($this->lang.'.menus.default.dashboard'),
            'systems' => $this->getSystemMenu($this->is_admin['is_admin']),
            'is_admin' => $this->is_admin,
        ];
        
        return view('systems/creditbank/dashboard', $data);
    }

    public function checkUser()
    {
        $data = [
            'lang' => $this->lang,
            'head_title' => 'Check User',
            'breadcrumb_item' => 'Moderators',
            'systems' => $this->getSystemMenu($this->is_admin['is_admin']),
            'is_admin' => $this->is_admin,
        ];
        
        return view($this->system_locate.'check_user', $data);
    }

    public function usersList()
    {
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang.'.page.title.user_list'),
            'breadcrumb_item' => lang($this->lang.'.menus.default.moderators'),
            'systems' => $this->getSystemMenu($this->is_admin['is_admin']),
            'is_admin' => $this->is_admin,
        ];
        
        return view($this->system_locate.'list_users', $data);
    }

    public function listLogs()
    {
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang.'.menus.default.user_logs'),
            'breadcrumb_item' => lang($this->lang.'.menus.default.moderators'),
            'systems' => $this->getSystemMenu($this->is_admin['is_admin']),
            'is_admin' => $this->is_admin,
        ];
        
        return view($this->system_locate.'list_logs', $data);
    }
}
?>