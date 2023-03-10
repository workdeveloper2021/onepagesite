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
        $this->load->model('Usermodel','UM');
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
        $image = curl_file_create($_FILES['image']['tmp_name'],$_FILES['image']['type'],$_FILES['image']['name']);
        $video = curl_file_create($_FILES['video']['tmp_name'],$_FILES['video']['type'],$_FILES['video']['name']);

            $postRequest = array(
                   'categoryId' => $_POST['categoryId'],
                   'name' => 'test',
                   'thumbnail' => $image,
                   'url' =>$video
            );
           $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'http://107.21.80.111:5500/admin/item/addItem');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
           
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postRequest);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
                $this->session->set_flashdata('fail','Not Added');
                redirect('item?id='.$_POST['categoryId']);

            }
            $this->session->set_flashdata('up_success','Item Added Successfully');
                redirect('item?id='.$_POST['categoryId']);
            curl_close($ch);
      
    }

    public function update(){
        if($_FILES['image']['size'] > 0){
        $image = curl_file_create($_FILES['image']['tmp_name'],$_FILES['image']['type'],$_FILES['image']['name']);
        }else{
        $image = $_POST['oldimage'];
        }

        if($_FILES['video']['size'] > 0){
        $video = curl_file_create($_FILES['video']['tmp_name'],$_FILES['video']['type'],$_FILES['video']['name']);
        }else{
        $video = $_POST['oldvideo'];    
        }
       

        $postRequest = array(
               'id' =>$_POST['id'],
               'categoryId' => $_POST['categoryId'],
               'name' => 'test',
               'thumbnail' => $image,
               'url' =>$video
        );

           $cURL = curl_init();
           curl_setopt($cURL, CURLOPT_URL, 'http://107.21.80.111:5500/admin/item/updateItem');
           curl_setopt($cURL, CURLOPT_POSTFIELDS, $postRequest);
           curl_setopt($cURL, CURLOPT_CUSTOMREQUEST, 'PUT');
           curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

           if(curl_exec($cURL) === false){
                echo 'Curl error: ' . curl_error($cURL);
                $this->session->set_flashdata('fail','Not Added');
                redirect('item?id='.$_POST['categoryId']);
           }else{
                $curlResponse = curl_exec($cURL);
           }

            $this->session->set_flashdata('up_success','Item Updated Successfully');
                redirect('item?id='.$_POST['categoryId']);
           curl_close($cURL);
          
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