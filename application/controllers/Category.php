<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Category extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
        $this->load->model('Homemodel','HM');
         $this->load->helper(array('form', 'url','datafetch'));  
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    { 
    	$data['category'] = fetch_category();
        $this->loadViews("admin/category/index",$data);
    }

     
}
?> 