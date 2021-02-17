<?php namespace App\Controllers\frontend;
 
use CodeIgniter\Controller;
 
class DashboardController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Welcome back, ".$session->get('username');
    }
}