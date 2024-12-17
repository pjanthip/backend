<?php

namespace App\Controllers;
use CodeIgniter\Config\Services;

class System extends BaseController {
    public function set($method , $param){
        if (method_exists($this, $method)) {
            return $this->$method($param);
        }
        return redirect()->to(previous_url());
    }

    public function system($param) {
        if(isset($param)){
            session()->set('system', $param);
        }
        return redirect()->to(previous_url());
    }

    public function theme($param) {
        if(isset($param)){
            session()->set('theme', $param); 
        }
        return redirect()->to(previous_url());
    }
}
