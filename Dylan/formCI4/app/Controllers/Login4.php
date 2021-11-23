<?php
namespace App\Controllers;

use CodeIgniter\Controller;

// Form Validation using external Form rules 
class Login4 extends BaseController
{
	function __construct() {
            /* Loads the form and url helper */	
             helper(['form', 'url']);
        }
	
    public function index()
    {
    	$data = [];
	
        /* Loads the form_validation library  */	
        $validation =  \Config\Services::validation();	
            
        //If the post request submitted
	if ($this->request->getMethod() == 'post'){	
	
	//If validation does not pass userLogin rules defined in app/Config/Validation
        if (!$this->validate('userlogin')) {
			//Get validator details - error messgaes etc.
			$data['validation'] = $this->validator;	
				
            //Render view with validator errors 
            echo view('UserLogin4', $data);				
         }
            else {
                //Passed Validation 
		echo view('Success4');
            }
	}
	else {
            //Display Form 
            echo view('UserLogin4', $data);		
	}
    }
}	
?>
