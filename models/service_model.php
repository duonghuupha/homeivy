<?php
class Service_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_detail($id){
        $query = $this->db->query("SELECT * FROM tbl_blog WHERE id = $id AND status = 1");
        return $query->fetchAll();
    }
}
?>