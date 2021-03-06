<?php 
/*
    Generated by Manuigniter v2.0 
    www.manuigniter.com
*/
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Car_version extends REST_Controller{
 function __construct()
 {
       parent::__construct();
      $this->load->model('Car_version_model');
 } 
 /*
* Listing of car_version
 */
public function get_all_post()
{
  try{
  $data['car_version'] = $this->Car_version_model->get_all_car_version();
     if($data['car_version'] && $data['car_version']!=null){
       $car_version_ar = array();
       foreach($data['car_version'] as $c)
       {
       $c_ar = array();
       $c_ar['brand_id'] = $c['brand_id'];
       $c_ar['ver_name'] = $c['ver_name'];
       $car_version_ar[] = $c_ar;
       }
       $response = array(
       'status' => 200,
       'message' => 'get all data Succesfully',
       'data' => $car_version_ar,
       );
       $this->response($response, REST_Controller::HTTP_OK);
     }
     else{
       $response = array(
      'status' => 400,
      'message' => 'Detail is not found'
        );
       $this->response($response, REST_Controller::HTTP_OK); 
        }
       } catch (Exception $ex) {
             throw new Exception('Car_version controller_name : Error in get_all_post function - ' . $ex);
        }  
}
 /*
  * Adding a new car_version
  */
 function addnew_post()
 {  
  try{
      $params = array(
       'brand_id'=> $this->input->post('brand_id'),
       'ver_name'=> $this->input->post('ver_name'),
        );
       $this->load->library('upload');
       $this->load->library('form_validation');
  if(isset($_POST['brand_id']) && $_POST['brand_id'] == '' || !isset($_POST['brand_id']))
                         $this->response(array('status' => 400,'message' => 'brand_id is require'), REST_Controller::HTTP_OK);
  if(isset($_POST['ver_name']) && $_POST['ver_name'] == '' || !isset($_POST['ver_name']))
                         $this->response(array('status' => 400,'message' => 'ver_name is require'), REST_Controller::HTTP_OK);
        if($this->form_validation->run())  
        {  
            $ver_id= $this->Car_version_model->add_car_version($params);
   $data['car_version'] = $this->Car_version_model->get_car_version($ver_id);
           $response = array(
            'status' => 200,
            'message' => 'Succesfully Added',
            'data' => $data
             );
           $this->response($response, REST_Controller::HTTP_OK);
        }
        else
        { 
           $response = array(
            'status' => 400,
            'message' => 'Not Added try again',
            'data' => ''
             );
           $this->response($response, REST_Controller::HTTP_OK);
        }
       } catch (Exception $ex) {
             throw new Exception('Car_version controller_name : Error in new car_version function - ' . $ex);
       }  
 }  
  /*
  * Editing a car_version
 */
  function edit_post($ver_id)
 {   
  try{
   $data['car_version'] = $this->Car_version_model->get_car_version($ver_id);
       $this->load->library('upload');
       $this->load->library('form_validation');
     if(isset($data['car_version']['ver_id']))
      {
        $params = array(
           'brand_id'=> $this->input->post('brand_id'),
           'ver_name'=> $this->input->post('ver_name'),
        );
           $this->response(array('status' => 400,'message' => 'brand_id required'), REST_Controller::HTTP_OK);
           $this->response(array('status' => 400,'message' => 'ver_name required'), REST_Controller::HTTP_OK);
         if($this->form_validation->run())  
           {  
           $this->Car_version_model->update_car_version($ver_id,$params);
           $response = array(
            'status' => 200,
            'message' => 'Succesfully Updated',
            'data' => $ver_id
             );
           $this->response($response, REST_Controller::HTTP_OK);
           }
           else
          {
           $response = array(
            'status' => 400,
            'message' => 'Not Updated Try again',
            'data' => $ver_id
             );
           $this->response($response, REST_Controller::HTTP_OK);
          }
  }
       } catch (Exception $ex) {
             throw new Exception('Car_version controller_name : Error in edit_post function - ' . $ex);
        }  
} 
/*
  * Deleting car_version
  */
  function remove_post($ver_id)
   {
  try{
      $car_version = $this->Car_version_model->get_car_version($ver_id);
  // check if the car_version exists before trying to delete it
       if(isset($car_version['ver_id']))
       {
         $this->Car_version_model->delete_car_version($ver_id);
           $response = array(
            'status' => 200,
            'message' => 'Succesfully Removed',
            'data' => $ver_id
             );
           $this->response($response, REST_Controller::HTTP_OK);
       }
       else
           $response = array(
            'status' => 400,
            'message' => 'Not Updated Try again',
            'data' => $ver_id
             );
           $this->response($response, REST_Controller::HTTP_OK);
       } catch (Exception $ex) {
             throw new Exception('Car_version controller_name : Error in remove_post function - ' . $ex);
        }  
  }
 }
