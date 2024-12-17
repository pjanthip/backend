<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Config\Services;
use CodeIgniter\Language\Language;
use Config\Database;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    protected $db;
    protected $lang;
    protected $system_locate;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->lang = session()->get('locale') ?? env('app.language', 'en');
    }

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        
        // Load Language Service
        $language = Services::language();
        $locale = session()->get('locale') ?? env('app.language', 'en');
        $language->setLocale($locale);
        session()->set('locale', $locale);
    }

    public function changeLanguage($lang)
    {
        $language = Services::language();
        if (in_array($lang, ['en', 'th'])) {
            $language->setLocale($lang);
            session()->set('locale', $lang);  // ตั้งค่าภาษาผ่าน session
        }
        return redirect()->to(previous_url());
    }

    public function isLoggedIn()
    {
        $this->db = Database::connect();
        $cookie = get_cookie('user');
        if($cookie){
            $encryptedDataWithIv = base64_decode($cookie);
            $dataParts = explode('::', $encryptedDataWithIv, 2);
            if (count($dataParts) === 2) {
                list($encryptedData, $encodedIv) = $dataParts;
                $iv = base64_decode($encodedIv);
                $key = base64_decode(env('encryption.key'));
                $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key, 0, $iv);
                if ($decryptedData !== false && $decryptedData !== null) {
                    $user = $this->db->table('users')->where('username', $decryptedData)->get()->getRow();

                    if(!empty($user->user_type) && $user->user_type === 'administrator'){
                        session()->set([
                            'is_administrator' => true,
                        ]);
                    }

                    if ($user) {
                        session()->set([
                            'is_logged_in' => true,
                            'username' => $user->username,
                            'full_name' => $user->user_fname . ' ' . $user->user_lname,
                            'email' => $user->user_email,
                            'user_id' => $user->id,
                        ]);
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return (session()->get('is_logged_in'))? true : false;
        }
    }

    public function getSystemMenu($is_admin)
    {
        $this->db = Database::connect();
        if($is_admin){
            return $this->db->table('system')->where('status', 1)->get()->getResult();
        }else{
            $builder = $this->db->table('system_access');
            $builder->select('system_access.id AS "as access_id", system_access.system_access_status, system.id, system.system_name_short, system.system_name_full, system.icon_code, system.`status`');
            $builder->join('system', 'system_access.system_id = system.id', 'inner');
            $builder->where('system.`status`', 1);
            return $builder->get()->getResult();
        }
        
    }

    public function isAdministrator(){
        $is_admin = true;
        $system = 'full';
        if (!session()->has('is_administrator') || session()->get('is_administrator') !== true) {
            $is_admin = false;
            $this->db = Database::connect();
            $query = $this->db->table('system_access')
                  ->select('system.system_name_short') // เลือกเฉพาะคอลัมน์ที่ต้องการ
                  ->join('system', 'system_access.system_id = system.id') // ทำการ JOIN กับตาราง system
                  ->where('system_access.is_default', 1) // เงื่อนไขว่า is_default = 1
                  ->where('system_access.system_access_status', 1) // เงื่อนไขว่า system_access_status = 1
                  ->where('system.status', 1); // เงื่อนไขว่า system.status = 1
            $result = $query->get()->getRow();
            $system = $result->system_name_short;
        }

        if(!session()->has('system')){
            session()->set('system', $system);
        }
        
        $data = [
            "is_admin" => $is_admin,
            "system" => $system
        ];
        return $data;

        //return (session()->has('is_administrator') && session()->get('is_administrator') === true)? true:false;
    }
}
