<?php 
/*
   Generated by Manuigniter v2.0 
   www.manuigniter.com
*/
class Car_brand_model extends CI_Model 
{ 
     function __construct()
      {
          parent::__construct();
      }
      /*
        * Get car_brand by brand_id 
      */ 
      function get_car_brand($brand_id)
      {
        try{
           return $this->db->get_where('car_brand',array('brand_id'=>$brand_id))->row_array();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model Model : Error in get_car_brand function - ' . $ex);
           }  
      }
      /*
        * Get car_brand by  column name
      */ 
      function get_car_brandbyclm_name($clm_name,$clm_value)
      {
        try{
           return $this->db->get_where('car_brand',array($clm_name=>$clm_value))->row_array();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model Madel : Error in get_car_brandbyclm_name function - ' . $ex);
           }  
      }
     /*
        * Get All car_brand count 
      */ 
      function get_all_car_brand_count()
      {
        try{
           $this->db->from('car_brand');
           return $this->db->count_all_results();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in get_all_car_brand_count function - ' . $ex);
           }  
      }
     /*
        * Get All with associated tables join car_brandcount 
      */ 
      function get_all_with_asso_car_brand()
      {
        try{
          $query = $this->db->get(); 
            if($query->num_rows() != 0){
               return $query->result_array();
            }else{
                return false;
            }
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in get_all_with_asso_car_brand function - ' . $ex);
           }  
      }
      /*
          * Get all car_brand 
      */ 
      function get_all_car_brand($params = array())
      {
        try{
              $this->db->order_by('brand_id', 'desc');
              if(isset($params) && !empty($params)){
               $this->db->limit($params['limit'], $params['offset']);
              }
               return $this->db->get('car_brand')->result_array();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in get_all_car_brand function - ' . $ex);
           }  
      } 
      /*
         * function to add new car_brand 
      */
      function add_car_brand($params)
      {
        try{
          $this->db->insert('car_brand',$params);
        return $this->db->insert_id();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in add_car_brand function - ' . $ex);
           }  
      }
      /* 
          * function to update car_brand 
      */
      function update_car_brand($brand_id,$params)
      {
        try{
            $this->db->where('brand_id',$brand_id);
        return $this->db->update('car_brand',$params);
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in update_car_brand function - ' . $ex);
           }  
       }
     /* 
          * function to delete car_brand 
      */
       function delete_car_brand($brand_id)
       {
        try{
             return $this->db->delete('car_brand',array('brand_id'=>$brand_id));
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in delete_car_brand function - ' . $ex);
           }  
       }
      /*
        * Get car_brand by  column name where not in particular id
      */ 
      function get_car_brandbyclm_name_not_id($clm_name,$clm_value,$where_cond)
      {
        try{
            $this->db->where('brand_id!=', $where_cond);
           return $this->db->get_where('car_brand',array($clm_name=>$clm_value))->row_array();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in get_car_brandbyclm_name_not_id function - ' . $ex);
           }  
      }
     /*
        * Get All with associated tables join car_brandcount 
      */ 
      function get_all_with_asso_car_brand_by_cat($column_name=null,$value_id=null,$params=array())
      {
        try{
          $query = $this->db->get(); 
            if($query->num_rows() != 0){
               return $query->result_array();
            }else{
                return false;
            }
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in get_all_with_asso_car_brand_by_cat function - ' . $ex);
           }  
      }
      /*
          * Get all car_brand_by_cat 
      */ 
      function get_all_car_brand_by_cat($column_name=null,$value_id=null,$params=array())
      {
        try{
              $this->db->order_by('brand_id', 'desc');
              $this->db->where($column_name, $value_id);
              if(isset($params) && !empty($params)){
               $this->db->limit($params['limit'], $params['offset']);
              }
               return $this->db->get('car_brand')->result_array();
           } catch (Exception $ex) {
             throw new Exception('Car_brand_model model : Error in get_all_car_brand_by_cat function - ' . $ex);
           }  
      } 
 }
