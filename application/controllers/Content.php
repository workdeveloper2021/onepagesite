<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Content extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermodel','UM');
        $this->isLoggedIn();
        $this->load->model('Homemodel','HM');
         $this->load->helper(array('form', 'url'));   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    { 
    	$data['pricing'] = $this->HM->select_with_where('content',array('id !='=>0),'*');
        $this->loadViews("admin/content/index",$data);
    }

     public function edit($id)
    { 
    	$data['pricing'] = $this->HM->fetch_row_array('content',array('id'=>$id),'*');
        $this->loadViews("admin/content/contentedit",$data);
    }
    public function update(){
		$post = $this->input->post();
	    $id = $post['id'];
        unset($post['id']);
		$result = $this->HM->update('content',array('id'=>$id),$post);
		if($result){
			
			$this->session->set_flashdata('up_success','Content Details Updated Successfully');
			redirect('content');
		}
		else{
			
			$this->session->set_flashdata('fail','Content Not Added');
			redirect('content');
		}
	}
}
?> 