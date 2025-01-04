<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $is_admin;
    protected $is_logged_in;

    public function __construct()
    {
        parent::__construct();
        $this->system_locate = 'systems/administrator/moderators/';
        $this->is_logged_in = $this->isLoggedIn();
        $this->is_admin = ($this->is_logged_in)? $this->isAdministrator():false;
    }

    public function index()
    {
        $head_title = lang($this->lang.'.menus.default.dashboard');
        $breadcrumb = $this->generateBreadcrumb([]);
        $page = 'Dashboard';
        $this->check_first(true, $head_title, $breadcrumb, $page);
        return view('dashboard/dashboard', $this->data);

        // $uri = service('uri');
        // $uriString = $uri->getPath();
        
        // if($this->is_admin['is_admin']){
        //     return view('dashboard/dashboard', $this->data);
        // }else{
        //     return redirect()->to('/'.session()->get('system'));
        //     // $uri = service('uri');
        //     // $uriString = $uri->getPath();
        //     // if($uriString != '/'.session()->get('system')){
        //     //     return redirect()->to('/'.session()->get('system'));
        //     // }else{
                
        //     // }
        // }
    }
}
?>