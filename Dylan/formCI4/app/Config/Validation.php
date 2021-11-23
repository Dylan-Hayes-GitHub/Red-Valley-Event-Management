<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules - User Defined Validaton Rules
	//--------------------------------------------------------------------

        public $userlogin = ['Username' => ['label' => 'Username',
                                            'rules'  => 'required',
                                            
                            ],
							'Fname'	   =>[ 'label' => 'FName',
											'rules' => 'required|min_length[2]|max_length[15]',
											'errors' => ['required' => '%s is a mandatory field',
														 'min_length[2]' => '%s must be more then 1 character in length',
														 'max_length[15]' => '%s must be more then 15 characters in length'
											]
							],
							'Surname'  =>[ 'label' => 'Lname',
											'rules' => 'required|min_length[3]|max_length[20]',
											'errors' => ['required' => '%s is a mandatory field',
														'min_length[3]' => '%s must be more then 1 character in length',
														'max_length[20]' => '%s must be more then 15 characters in length']
							],
							'Address' =>  [ 'label' => 'Address',
											'rules' => 'required',
											'errors' => ['required' => '%s this is a required field']
											
							],
							'City' => [ 'label' => 'City',
										'rules' => 'required|in_list[Cork.Limerick.Galway]',
										'errors' => ['required' => '%s this is a required field'
													 'in_list' => 'Must be Cork Limerick or Galway'
										]

							],	
                            'email'    => [ 'label' => 'Email Address',
                                            'rules'  => 'required|valid_email',
                                            'errors' => ['valid_email' => 'Please check the Email Address. It does not appear to be valid.']
                            ],
                            'password' => [ 'rules'  => 'required|alpha_numeric|min_length[5]',
                                            'errors' => ['required' => 'Password is a manadatory field.']
                            ]	

                        ];  
	
        
}
