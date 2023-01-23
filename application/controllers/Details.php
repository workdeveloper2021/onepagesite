<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Details extends BaseController
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
    public function index($id)
    { 
    	$data['content_data'] = $this->HM->select_with_where('details',array('content_id'=>$id),'*');
        $data['details'] = $this->HM->fetch_row_array('content',array('id'=>$id),'*');
        // echo "<pre>";
        // print_r($data);
        $this->loadViews("admin/content/details",$data);
    }
     public function add($id)
    { 
        $data['details'] = $this->HM->fetch_row_array('content',array('id'=>$id),'*');
        $this->loadViews("admin/content/add",$data);
    }
    public function save()
    {
        $post = $this->input->post();
        // print_r($post);
        // die;
            if($_FILES["image"]["size"] > 0 ){  
                $image = '';
                $tmpFilePath = $_FILES['image']['tmp_name'];
                $image_file_type = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
                $newFilePath = 'assets/uploads/pricing/'.time().'.'.$image_file_type;
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                 $post['image'] = $newFilePath;  
                }
            }

        $result = $this->HM->insert('details',$post);
            if($result){
                
                $this->session->set_flashdata('up_success','Details Added Successfully');
                redirect('details/index/'.$post['content_id']);
            }
            else{
                
                $this->session->set_flashdata('fail','Not Added');
                redirect('details/index/'.$post['content_id']);
            }
    }
     public function edit($id)
    { 
    	$data['details'] = $this->HM->fetch_row_array('details',array('id'=>$id),'*');
        $this->loadViews("admin/content/edit",$data);
    }
    public function update(){
		$post = $this->input->post();
	    $id = $post['id'];
        unset($post['id']);
        if($_FILES["image"]["size"] > 0 ){  
            $image = '';
            $tmpFilePath = $_FILES['image']['tmp_name'];
            $image_file_type = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
            $newFilePath = 'assets/uploads/pricing/'.time().'.'.$image_file_type;
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
             $post['image'] = $newFilePath;  
            }
        }
        
		$result = $this->HM->update('details',array('id'=>$id),$post);
		if($result){
			
			$this->session->set_flashdata('up_success','Details Updated Successfully');
            redirect('details/index/'.$post['content_id']);
		}
		else{
			
			$this->session->set_flashdata('fail','Details Not Added');
            redirect('details/index/'.$post['content_id']);
		}
    }
    public function delete($id)
    { 
       $result = $this->HM->delete('details',array('id'=>$id));
        if($result){
            $this->session->set_flashdata('dl_success','Details Deleted Successfully');
        redirect($_SERVER["HTTP_REFERER"]);
        }
        else{
            
            $this->session->set_flashdata('fail','Content Not Added');
        redirect($_SERVER["HTTP_REFERER"]);
        }
    }
	
}
?> 