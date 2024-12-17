<?php
namespace App\Controllers\Creditbank;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->system_locate = 'systems/creditbank/';
    }

    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/auth');
        }

        $is_admin = $this->isAdministrator();

        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang.'.menus.default.dashboard'),
            'breadcrumb_item' => lang($this->lang.'.menus.default.dashboard'),
            'systems' => $this->getSystemMenu($is_admin['is_admin']),
            'is_admin' => $is_admin,
        ];
        
        return view($this->system_locate.'dashboard', $data);
    }
}
?>