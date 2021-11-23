<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class LoginV2 extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']); 
        $validation =  \Config\Services::validation();
    }
	
    public function index()
   
    {
       // if($this->request->getMethod() == 'post'){}
       $rules = [
        'username' => 'required',
        'email' => 'required',
        'password' => 'required',
        'passconf' => 'required'
       ];

           

        if (!$this->validate($rules))
        {
            $data['validation'] = $this->validator;
            echo view('UserLogin', $data);
        }
        else
        {
            echo view('Success');
        }
    }
}
