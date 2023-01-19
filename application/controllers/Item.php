<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Item extends BaseController
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
    	
        $data['item'] = fetch_item_by_categoryId($_GET['id']);
        $this->loadViews("admin/item/index",$data);
    }

    public function add()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
       // $data['banner'] = $this->HM->fetch_row_array('banner',array(),'*');
        $this->loadViews("admin/item/add");
    }
    public function edit()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        $this->loadViews("admin/item/edit");
    }
    public function save()
    {
        $post = $this->input->post();
        $result = add_item($post['categoryId'],$post['image'],$post['video']);
        if($result){
            
            $this->session->set_flashdata('up_success','Slider Added Successfully');
            redirect('item?id='.$post['categoryId']);
        }
        else{
            
            $this->session->set_flashdata('fail','Not Added');
            redirect('item?id='.$post['categoryId']);
        }
    }

    public function update(){
        $post = $this->input->post();
        
        $result = update_item($post['id'],$post['categoryId'],$post['image'],$post['video']);
            if($result){
                
                $this->session->set_flashdata('up_success','Slider Updated Successfully');
                redirect('item?id='.$post['categoryId']);
            }
            else{
                
                $this->session->set_flashdata('fail','Banner Not Added');
               redirect('item?id='.$post['categoryId']);
            }
    }
    public function delete()
    { 
       $result =delete_item($_GET['id'],$_GET['categoryId']);
        if($result){
            $this->session->set_flashdata('success','Item image Deleted Successfully');
        redirect($_SERVER["HTTP_REFERER"]);
        }
        else{
            
            $this->session->set_flashdata('fail','Content Not Added');
        redirect($_SERVER["HTTP_REFERER"]);
        }
    }

     
}
?> 