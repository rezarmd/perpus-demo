<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kategori_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kategori by id_kategori
     */
    function get_kategori($id_kategori)
    {
        return $this->db->get_where('kategori',array('id_kategori'=>$id_kategori))->row_array();
    }
        
    /*
     * Get all kategori
     */
    function get_all_kategori()
    {
        $this->db->order_by('id_kategori', 'desc');
        return $this->db->get('kategori')->result_array();
    }
        
    /*
     * function to add new kategori
     */
    function add_kategori($params)
    {
        $this->db->insert('kategori',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kategori
     */
    function update_kategori($id_kategori,$params)
    {
        $this->db->where('id_kategori',$id_kategori);
        return $this->db->update('kategori',$params);
    }
    
    /*
     * function to delete kategori
     */
    function delete_kategori($id_kategori)
    {
        return $this->db->delete('kategori',array('id_kategori'=>$id_kategori));
    }
}