<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Adminhome extends BaseController
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
    public function banner()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        $data['banner'] = $this->HM->select_with_where('banner',array(),'*');
        $this->loadViews("admin/banner/index",$data);
    }
	public function add()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
       // $data['banner'] = $this->HM->fetch_row_array('banner',array(),'*');
        $this->loadViews("admin/banner/add");
    }
	public function edit($id)
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
       $data['banner'] = $this->HM->fetch_row_array('banner',array('id'=>$id),'*');
        $this->loadViews("admin/banner/edit",$data);
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
                $newFilePath = 'assets/uploads/banner/'.time().'.'.$image_file_type;
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                 $post['image'] = $newFilePath;  
                }
            }

        $result = $this->HM->insert('banner',$post);
            if($result){
                
                $this->session->set_flashdata('up_success','Slider Added Successfully');
                redirect('Adminhome/banner');
            }
            else{
                
                $this->session->set_flashdata('fail','Not Added');
                redirect('Adminhome/banner');
            }
    }
    public function update(){
		$post = $this->input->post();
		$id = $post['id'];
	        if($_FILES["image"]["size"] > 0 ){  
	            $image = '';
	            $tmpFilePath = $_FILES['image']['tmp_name'];
	            $image_file_type = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
	            $newFilePath = 'assets/uploads/banner/'.time().'.'.$image_file_type;
	            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
	             $post['image'] = $newFilePath;  
	            }
	        }
			// print_r($post);
			// die;
			$result = $this->HM->update('banner',array('id'=>$id),$post);
			if($result){
				
				$this->session->set_flashdata('up_success','Slider Updated Successfully');
				redirect('Adminhome/banner');
			}
			else{
				
				$this->session->set_flashdata('fail','Banner Not Added');
				redirect('Adminhome/banner');
			}
	}
	public function delete($id)
    { 
       $result = $this->HM->delete('banner',array('id'=>$id));
        if($result){
            $this->session->set_flashdata('success','Slider image Deleted Successfully');
        redirect($_SERVER["HTTP_REFERER"]);
        }
        else{
            
            $this->session->set_flashdata('fail','Content Not Added');
        redirect($_SERVER["HTTP_REFERER"]);
        }
    }
    public function Promosection(){
        $data['promo_section'] = $this->HM->fetch_row_array('promo_section',array('active_status'=>1),'*');
        $this->loadViews("admin/promosection/index",$data);
    }
    public function pr_update(){
		$post = $this->input->post();
		$id = $post['id'];
			$result = $this->HM->update('promo_section',array('id'=>$id),$post);
			if($result){
				$this->session->set_flashdata('up_success','Promo-section Updated Successfully');
				redirect('Adminhome/Promosection');
			}
			else{
				
				$this->session->set_flashdata('fail','Promo-section Not Added');
				redirect('Adminhome/Promosection');
			}
	}
}
?>