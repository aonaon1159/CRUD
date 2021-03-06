<?php 
/*
   Generated by Manuigniter v2.0 
   www.manuigniter.com
*/
class Car_version_model extends CI_Model 
{ 
     function __construct()
      {
          parent::__construct();
      }
      /*
        * Get car_version by ver_id 
      */ 
      function get_car_version($ver_id)
      {
        try{
           return $this->db->get_where('car_version',array('ver_id'=>$ver_id))->row_array();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model Model : Error in get_car_version function - ' . $ex);
           }  
      }
      /*
        * Get car_version by  column name
      */ 
      function get_car_versionbyclm_name($clm_name,$clm_value)
      {
        try{
           return $this->db->get_where('car_version',array($clm_name=>$clm_value))->row_array();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model Madel : Error in get_car_versionbyclm_name function - ' . $ex);
           }  
      }
     /*
        * Get All car_version count 
      */ 
      function get_all_car_version_count()
      {
        try{
           $this->db->from('car_version');
           return $this->db->count_all_results();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in get_all_car_version_count function - ' . $ex);
           }  
      }
     /*
        * Get All with associated tables join car_versioncount 
      */ 
      function get_all_with_asso_car_version()
      {
        try{
           $this->db->select('*');
           $this->db->from('car_version a  ' );
            $this->db->join('car_brand b', 'b.brand_id=a. brand_id','left');
          $query = $this->db->get(); 
            if($query->num_rows() != 0){
               return $query->result_array();
            }else{
                return false;
            }
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in get_all_with_asso_car_version function - ' . $ex);
           }  
      }
      /*
          * Get all car_version 
      */ 
      function get_all_car_version($params = array())
      {
        try{
              $this->db->order_by('ver_id', 'desc');
              if(isset($params) && !empty($params)){
               $this->db->limit($params['limit'], $params['offset']);
              }
               return $this->db->get('car_version')->result_array();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in get_all_car_version function - ' . $ex);
           }  
      } 
      /*
         * function to add new car_version 
      */
      function add_car_version($params)
      {
        try{
          $this->db->insert('car_version',$params);
        return $this->db->insert_id();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in add_car_version function - ' . $ex);
           }  
      }
      /* 
          * function to update car_version 
      */
      function update_car_version($ver_id,$params)
      {
        try{
            $this->db->where('ver_id',$ver_id);
        return $this->db->update('car_version',$params);
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in update_car_version function - ' . $ex);
           }  
       }
     /* 
          * function to delete car_version 
      */
       function delete_car_version($ver_id)
       {
        try{
             return $this->db->delete('car_version',array('ver_id'=>$ver_id));
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in delete_car_version function - ' . $ex);
           }  
       }
      /*
        * Get car_version by  column name where not in particular id
      */ 
      function get_car_versionbyclm_name_not_id($clm_name,$clm_value,$where_cond)
      {
        try{
            $this->db->where('ver_id!=', $where_cond);
           return $this->db->get_where('car_version',array($clm_name=>$clm_value))->row_array();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in get_car_versionbyclm_name_not_id function - ' . $ex);
           }  
      }
     /*
        * Get All with associated tables join car_versioncount 
      */ 
      function get_all_with_asso_car_version_by_cat($column_name=null,$value_id=null,$params=array())
      {
        try{
           $this->db->select('*');
           $this->db->from('car_version a  ' );
              //$this->db->where($column_name, $value_id);
            $this->db->join('car_brand b', 'b.brand_id=a. brand_id','left');
              $this->db->where('a.'.$column_name, $value_id);
          $query = $this->db->get(); 
            if($query->num_rows() != 0){
               return $query->result_array();
            }else{
                return false;
            }
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in get_all_with_asso_car_version_by_cat function - ' . $ex);
           }  
      }
      /*
          * Get all car_version_by_cat 
      */ 
      function get_all_car_version_by_cat($column_name=null,$value_id=null,$params=array())
      {
        try{
              $this->db->order_by('ver_id', 'desc');
              $this->db->where($column_name, $value_id);
              if(isset($params) && !empty($params)){
               $this->db->limit($params['limit'], $params['offset']);
              }
               return $this->db->get('car_version')->result_array();
           } catch (Exception $ex) {
             throw new Exception('Car_version_model model : Error in get_all_car_version_by_cat function - ' . $ex);
           }  
      } 
 }
