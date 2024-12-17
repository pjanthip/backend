<?php

namespace App\Controllers;
use CodeIgniter\Config\Services;

class Language extends BaseController {
    public function index($lang) {
        if(isset($lang)){
            $language = Services::language();
            if (in_array($lang, ['en', 'th', 'zh'])) {
                $language->setLocale($lang);
                session()->set('locale', $lang);  // ตั้งค่าภาษาผ่าน session
            }
        }
        
        return redirect()->to(previous_url());
    }
}
