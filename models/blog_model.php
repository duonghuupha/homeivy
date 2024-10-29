<?php
class Blog_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_detail($id){
        $query = $this->db->query("SELECT id, title, info, content, image, create_at, (SELECT tbl_category.title FROM tbl_category
                                    WHERE tbl_category.id = cate_id)  AS cate_title, cate_id FROM tbl_blog WHERE id = $id AND status = 1");
        return $query->fetchAll();
    }

    function get_info_menu($id){
        $query = $this->db->query("SELECT id, title, type, link FROM tbl_menu WHERE id = $id");
        return $query->fetchAll();
    }

    function get_list_blog($data_link, $offset, $rows){
        $result = array();
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_blog WHERE status = 1 AND FIND_IN_SET(cate_id, '$data_link')");
        $row = $query->fetchAll();
        $query = $this->db->query("SELECT id, title, info, image FROM tbl_blog WHERE status = 1 AND FIND_IN_SET(cate_id, '$data_link')
                                    ORDER BY id DESC LIMIT $offset, $rows");
        $result['total'] = $row[0]['Total'];
        $result['rows'] = $query->fetchAll();
        return $result;
    }
}
?>