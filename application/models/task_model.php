<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Task_model extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->db->query("SET CLIENT_ENCODING TO 'UTF8'"); 
    }

    public function add($data) {
  
        $this->db->insert('tasks', $data);
        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function getTasks() {
        $query = '
        SELECT 
        id_task,
            "Name",
            "Timestamp",
            "TotElapsedTime",
            "ElapsedSince"
            FROM 
            tasks WHERE active = true 
                 AND finalized = false
                 AND deleted = false';
    
        return $this->db->query($query)->result();
    }

    public function remove($id) {
        $query = "UPDATE tasks SET deleted = true WHERE id_task = $id";
        $this->db->query($query);
        $rows = $this->db->affected_rows();
        return $rows > 0 ? true : false;
    }



    // public function insertImage($data) {
    //     $this->db->insert('fotos', $data);
    //     $rows = $this->db->affected_rows();
    //     return $rows > 0 ? true : false;
    // }


}
