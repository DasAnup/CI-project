<?php 
namespace App\Controllers\frontend;
use App\Models\FormModel;
use CodeIgniter\Controller;

class SendMail extends BaseController
{

    public function index() 
	{
        return view('contact');
    }

    function sendMail() { 
        $to = $this->request->getVar('email');
        $name = $this->request->getVar('name');
        $phone = $this->request->getVar('phone');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('atanu.bera@vaptech.in', 'Confirm Registration');
        
        $email->setSubject($name);
        $email->setSubject($phone);
        $email->setMessage($message);

        if ($email->send()) 
		{
            echo 'Email successfully sent';
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

}