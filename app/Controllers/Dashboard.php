<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        parent::__construct();
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
            'is_admin' => $is_admin
        ];

        $uri = service('uri');
        $uriString = $uri->getPath();
        
        if($is_admin['is_admin']){
            return view('dashboard/dashboard', $data);
        }else{
            return redirect()->to('/'.session()->get('system'));
            // $uri = service('uri');
            // $uriString = $uri->getPath();
            // if($uriString != '/'.session()->get('system')){
            //     return redirect()->to('/'.session()->get('system'));
            // }else{
                
            // }
        }
    }
}
?>