<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Contrat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get contrat by id
     */
    function get_contrat($id)
    {
        return $this->db->get_where('contrat',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all contrat
     */
    function get_all_contrat()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('contrat')->result_array();
    }
        
    /*
     * function to add new contrat
     */
    function add_contrat($params)
    {
        $this->db->insert('contrat',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update contrat
     */
    function update_contrat($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('contrat',$params);
    }
    
    /*
     * function to delete contrat
     */
    function delete_contrat($id)
    {
        return $this->db->delete('contrat',array('id'=>$id));
    }
}