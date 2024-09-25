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
}
?>