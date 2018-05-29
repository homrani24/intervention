<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reclamation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get reclamation by id
     */
    function get_reclamation($id)
    {
        return $this->db->get_where('reclamation',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all reclamation
     */
    function get_all_reclamation()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('reclamation')->result_array();
    }
    function get_all_client_reclamation($id)
    {
        $this->db->where('id_user', $id);
        $this->db->order_by('id', 'desc');
        return $this->db->get('reclamation')->result_array();
    }
        
    /*
     * function to add new reclamation
     */
    function add_reclamation($params)
    {
        $this->db->insert('reclamation',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update reclamation
     */
    function update_reclamation($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('reclamation',$params);
    }
    
    /*
     * function to delete reclamation
     */
    function delete_reclamation($id)
    {
        return $this->db->delete('reclamation',array('id'=>$id));
    }
    function update_active($id)
    {
        $this->db->where('id',$id);
        $this->db->set('active',1);
        return $this->db->update('reclamation');
    }
    function update_non_active($id)
    {
        $this->db->where('id',$id);
        $this->db->set('active',0);
        return $this->db->update('reclamation');
    }
}
