<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    function fetch_category()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://107.21.80.111:5500/admin/category/getCategory');
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

        curl_setopt($ch, CURLOPT_URL, 'http://107.21.80.111:5500/admin/item/getItems?categoryId='.$id.'');
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

    function add_item($categoryId,$thumbnail,$url){
        $data = json_encode(array('categoryId'=>$categoryId,'name'=>'chfvjhgjhjhjhclip1','thumbnail'=>$thumbnail,'url'=>$url));
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://107.21.80.111:5500/admin/item/addItem');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
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

     function delete_item($id,$categoryId){
        $data = json_encode(array('id'=>$id,'categoryId'=>$categoryId));
      
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://107.21.80.111:5500/admin/item/deleteItem');
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


    function update_item($id,$categoryId,$thumbnail,$url){
        $data = json_encode(array('id'=>$id,'categoryId'=>$categoryId,'name'=>'chfvjhgjhjhjhclip1','thumbnail'=>$thumbnail,'url'=>$url));
       
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://107.21.80.111:5500/admin/item/updateItem');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

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
        curl_close($ch);
    }


