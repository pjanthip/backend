<?php
namespace App\Controllers\Administrator;

use App\Controllers\BaseController;

class Moderators extends BaseController
{
    protected $is_admin;
    protected $is_logged_in;
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->system_locate = 'systems/administrator/moderators/';
        $this->is_logged_in = $this->isLoggedIn();
        $this->is_admin = ($this->is_logged_in)? $this->isAdministrator():false;
    }

    private function check_first($head_title, $breadcrumb_item, $page){
        $this->data = [
            'lang' => $this->lang,
            'head_title' => $head_title,
            'breadcrumb_item' => $breadcrumb_item,
            'page' => $page,
            'systems' => $this->getSystemMenu($this->is_admin['is_admin']),
            'is_admin' => $this->is_admin,
        ];
    }

    public function index()
    {
        $this->registerUser();
    }

    public function registerUser()
    {
        if (!$this->is_logged_in) return redirect()->to('/auth');
        $this->check_first(lang($this->lang.'.menus.default.register'), lang($this->lang.'.menus.default.moderators'), 'moderators_register_user');
        return view($this->system_locate.'register_user', $this->data);
    }

    public function checkUser()
    {
        if (!$this->is_logged_in) return redirect()->to('/auth');
        $this->check_first(lang($this->lang.'.menus.default.check_user'), lang($this->lang.'.menus.default.moderators'), 'moderators_check_user');
        return view($this->system_locate.'check_user', $this->data);
    }

    public function usersList()
    {
        if (!$this->is_logged_in) return redirect()->to('/auth');
        $this->check_first(lang($this->lang.'.menus.default.user_list'), lang($this->lang.'.menus.default.moderators'), 'moderators_user_list');
        return view($this->system_locate.'list_users', $this->data);
    }

    public function listLogs()
    {
        if (!$this->is_logged_in) return redirect()->to('/auth');
        $this->check_first(lang($this->lang.'.menus.default.user_logs'), lang($this->lang.'.menus.default.moderators'), 'moderators_user_logs');
        return view($this->system_locate.'list_logs', $this->data);
    }
}
?>