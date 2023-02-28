<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    function login($email,$password){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://54.237.81.161:5500/admin/auth/logIn');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"email\":\"$email\",\n    \"password\":\"$password\"\n}");

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }else{
            return json_decode($result);
        }
        curl_close($ch);
    }

    function fetch_category()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://54.237.81.161:5500/admin/category/getCategory');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }else{
            return json_decode($result)->data;
        }
        curl_close($ch);
    } 


    function fetch_item_by_categoryId($id)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://54.237.81.161:5500/admin/item/getItems?categoryId='.$id.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }else{
            return json_decode($result)->data;
        }
        curl_close($ch);
    }  



     function delete_item($id,$categoryId){
        $data = json_encode(array('id'=>$id,'categoryId'=>$categoryId));
      
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://54.237.81.161:5500/admin/item/deleteItem');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }else{
            return json_decode($result);
        }
        curl_close($ch);
    }


    

