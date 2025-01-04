<?php

namespace App\Controllers;
use CodeIgniter\Encryption\Encryption;

class Authentication extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang . '.page.authentication.signin.login'),
            'breadcrumb_item' => 'Authentication',
            'social_frm' => false,
            'main_frm' => true
        ];
        $this->clear_data_user();
        return view('authentication/frm_login', $data);
    }

    public function register() {
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang . '.page.authentication.register.sign_up'),
            'breadcrumb_item' => '',
            'social_frm' => false,
            'main_frm' => true
        ];
        return view('authentication/frm_register', $data);
    }

    public function clear_data_user() {
        // $session = session();
        // $session->remove('is_logged_in');
        // $session->remove('username');
        // $session->remove('user_id');
        // $session->remove('email');
        // $session->remove('full_name');
        // $session->remove('is_administrator');
        // $session->remove('system');
        // $session->remove('after_sign');
        session()->destroy();
        $isSecure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || getenv('CI_ENVIRONMENT') === 'production';
        set_cookie([
            'name'   => 'user',
            'value'  => '', // ค่าของคุกกี้เป็นค่าว่าง
            'expire' => time() - 3600, // ตั้งเวลาให้หมดอายุทันที
            'secure' => $isSecure, // ตรวจสอบว่าใช้ https หรือไม่
            'httponly' => true, // ป้องกันการเข้าถึงจาก JavaScript
            'samesite' => 'Strict', // ใช้ cookie เฉพาะใน domain นี้
            'path' => '/', // กำหนด path ของคุกกี้
        ]);
    }

    public function logout() {
        $this->clear_data_user();
        return redirect()->to('/auth');
    }

    public function signin() {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $rememberMe = $this->request->getPost('remember_me');
        
        $user = $this->db->table('users')->where('username', $username)->get()->getRow();

        if ($user) {
            if (password_verify($password, $user->password)) {
                
                if($user->user_status != 1){
                    $message = '';
                    switch($user->user_status){
                        case 0 : $message = lang($this->lang . '.page.authentication.register.account_status_pending');
                                 break;
                        case 2 : $message = lang($this->lang . '.page.authentication.register.account_status_paused');
                                 break;
                        case 3 : $message = lang($this->lang . '.page.authentication.register.account_status_banned');
                                 break;
                        default : $message = lang($this->lang . '.page.authentication.register.account_status_active');
                    };
                    $json = json_encode(array(
                        'status' => FALSE,
                        'message' => $message
                    ));
                    echo $json;
                    exit();
                }

                if(!empty($user->user_type) && $user->user_type === 'administrator'){
                    session()->set([
                        'is_administrator' => true,
                    ]);
                }

                session()->set([
                    'is_logged_in' => true,
                    'username' => $user->username,
                    'full_name' => $user->user_fname . ' ' . $user->user_lname,
                    'email' => $user->user_email,
                    'user_id' => $user->id,
                ]);

                if ($rememberMe) {
                    $encryption = \Config\Services::encryption();
                    $key = base64_decode(env('encryption.key'));
                    $ivLength = openssl_cipher_iv_length('aes-256-cbc');
                    $iv = openssl_random_pseudo_bytes($ivLength);
                    $encryptedData = openssl_encrypt($user->username, 'aes-256-cbc', $key, 0, $iv);
                    $encryptedDataWithIv = $encryptedData . '::' . base64_encode($iv);

                    $expire = time() + (60 * 60 * 24) * 30;
                    $isSecure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || getenv('CI_ENVIRONMENT') === 'production';
                    set_cookie([
                        'name'   => 'user',
                        'value'  => base64_encode($encryptedDataWithIv),
                        'expire' => $expire,
                        'secure' => $isSecure,
                        'httponly' => true,
                        'samesite' => 'Strict',
                    ]);
                }

                $json = json_encode(array(
                    'status' => TRUE,
                    'message' => lang($this->lang . '.success')
                ));
                echo $json;
            } else {
                $json = json_encode(array(
                    'status' => FALSE,
                    'message' => lang($this->lang . '.invalid_password')
                ));
                echo $json;
            }
        } else {
            $json = json_encode(array(
                'status' => FALSE,
                'message' => lang($this->lang . '.user_not_found')
            ));
            echo $json;
        }
    }

    public function addUser(){
        $validation = \Config\Services::validation();

        $validation->setRules([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|valid_email',
            'password'   => 'required|min_length[6]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/]',
            'confirm_password' => 'required|matches[password]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => lang($this->lang.'.page.authentication.register.register_error_message10')
            ]);
        }

        $firstName = $this->request->getPost('first_name');
        $lastName = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $column_email = 'user_email';
        $column_username = 'username';
        $emailExists = $this->checkHasUser($column_email , $email);
        $usernameExists = $this->checkHasUser($column_username , $email);
        if($emailExists || $usernameExists){
            return $this->response->setJSON([
                'status'  => false,
                'message' => lang($this->lang.'.page.authentication.register.register_error_already')
            ]);
        }else{
            $userData = [
                'username' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'user_fname' => $firstName,
                'user_lname' => $lastName,
                'user_email' => $email,
                'user_status' => 0
            ];
            $builder = $this->db->table('users');
            if ($builder->insert($userData)) {
                return $this->response->setJSON([
                    'status'  => true,
                    'message' => lang($this->lang.'.page.authentication.register.register_success')
                ]);
            } else {
                return $this->response->setJSON([
                    'status'  => false,
                    'message' => lang($this->lang.'.page.authentication.register.register_fail')
                ]);
            }
        }
    }

    public function checkHasUser($column_name , $param){
        $exists = $this->db->table('users')->where($column_name, $param)->countAllResults() > 0;
        return $exists;
    }

    public function resetPassword(){
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang . '.page.authentication.reset_password.reset_password'),
            'breadcrumb_item' => '',
            'social_frm' => false,
            'main_frm' => true
        ];
        return view('authentication/frm_reset_password', $data);
    }

    public function forgotPassword(){
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang . '.page.authentication.signin.forgot_password'),
            'breadcrumb_item' => '',
            'main_frm' => true
        ];
        return view('authentication/frm_forgot_password', $data);
    }

    public function checkEmail(){
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang . '.page.authentication.reset_password.reset_password'),
            'breadcrumb_item' => '',
            'main_frm' => true,
            'social_frm' => false,
        ];
        return view('authentication/frm_check_mail', $data);
    }

    public function verification(){
        $data = [
            'lang' => $this->lang,
            'head_title' => lang($this->lang . '.page.authentication.reset_password.reset_password'),
            'breadcrumb_item' => '',
            'main_frm' => true,
            'social_frm' => false,
        ];
        return view('authentication/frm_code_verification', $data);
    }
}
