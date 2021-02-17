<?php namespace App\Models\frontend;
use CodeIgniter\Model;

class RegisterModel extends Model{
    protected $table = 'register';
    protected $allowedFields = ['first_name','last_name','email_address','username','password'];
}
