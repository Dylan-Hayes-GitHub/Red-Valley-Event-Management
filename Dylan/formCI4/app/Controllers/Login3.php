<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Login3 extends BaseController
{
	function __construct()
    {
		/* Loads the form and url helper */	
        helper(['form', 'url']);    
		
		/* Loads the form_validation library  */	
		$validation =  \Config\Services::validation();		
    }
	
    public function index()
    {
    	$data = [];
	
        //If the post request submitted
	if ($this->request->getMethod() == 'post'){	

         
         //Set Validation Rules
         $rules = [ 'username' => [ 'label' => 'Username',
         'rules'  => 'required|min_length[4]|max_length[10]',
         'errors' => ['required' => 'You must enter a %s',
                         'min_lentgh' => 'Your username must be a minimum of {param} characters',
                         'max_lentgh' => 'Your username must be a maximum of {param} characters']
],
'email'    => [ 'label' => 'Email Address',
'rules'  => 'required|valid_email',
'errors' => ['valid_email' => 'Please check the %s. It does not appear to be valid.']
],
'password' => [ 'rules'  => 'required|alpha_numeric|min_length[5]',
'errors' => ['required' => 'Password is a manadatory field.']
],
'passconf' => [ 'rules'  => 'required|matches[password]',
'errors' => ['required' => 'Password confirmation is a mandatory field.']  
]
];  
			
            //If validation does not pass
            if (! $this->validate($rules)) {
				//Get validator details - error messgaes etc.
				$data['validation'] = $this->validator;	
				
                //Render view with validator errors 
				echo view('UserLogin3', $data);				
            }
            else {
                //Passed Validation 
				echo view('Success3');
            }
	}
	else {
            //Display Form 
            echo view('UserLogin3', $data);		
	}
    }
}	
?>
