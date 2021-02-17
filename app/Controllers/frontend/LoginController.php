<?php namespace App\Controllers\frontend;
 
use CodeIgniter\Controller;
use App\Models\frontend\RegisterModel;
 
class LoginController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('frontend/login');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new RegisterModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'email_address'    => $data['email_address'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url());
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/login'));
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to(base_url('/login'));
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
} 