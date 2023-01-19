<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Webcontroller extends CI_Controller 
{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homemodel','HM');
    }
    
    public function index(){
        $data['banner'] = $this->HM->select_with_where('banner',array(),'*');
        $data['content'] = $this->HM->select_with_where('content',array(),'*');
        $data['details'] = $this->HM->select_with_where('details',array(),'*');
        $this->load->view('index.php',$data);
    }
    
}

?>