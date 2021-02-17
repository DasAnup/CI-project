<?php namespace App\Controllers\frontend;
use CodeIgniter\Controller;
use App\Models\frontend\RegisterModel;

class RegisterController extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('frontend/register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'firstname'     => 'required|min_length[3]|max_length[20]',
            'lastname'     => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'username'     => 'required|min_length[3]|max_length[20]',
            'password'      => 'required|min_length[6]|max_length[200]'
        ];
         
        if($this->validate($rules)){
            $model = new RegisterModel();
            $data = [
                'first_name'     => $this->request->getVar('firstname'),
                'last_name'     => $this->request->getVar('lastname'),
                'email_address'    => $this->request->getVar('email'),
                'username'    => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to(base_url('/login'));
        }else{
            $data['validation'] = $this->validator;
            echo view('frontend/register', $data);
        }
         
    }
 
}