<?php
class Model {
    function __construct() {
		$this->db = new Database();
	}

    // them moi du lieu
    function insert($table, $array){
        $cols = array();
        $bind = array();
        foreach($array as $key => $value){
            $cols[] = $key;
            $bind[] = "'".$value."'";
        }
        $query = $this->db->query("INSERT INTO ".$table." (".implode(",", $cols).") VALUES (".implode(",", $bind).")");
        return $query;
    }

    // cap nhat du lieu
    function update($table, $array, $where){
        $set = array();
        foreach($array as $key => $value){
            $set[] = $key." = '".$value."'";
        }
        $query = $this->db->query("UPDATE ".$table." SET ".implode(",", $set)." WHERE ".$where);
        return $query;
    }

    // xoa du lieu
    function delete($table, $where = ''){
        if($where == ''){
            $query = $this->db->query("DELETE FROM ".$table);
        }else{
        $query = $this->db->query("DELETE FROM ".$table." WHERE ".$where);
        }
        return $query;
    }
///////////////////////////// cac ham khac //////////////////////////////////////////////////////////////////////////////////
    function get_setting(){
        $query = $this->db->query("SELECT * FROM tbl_setting WHERE id = 1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_data_block1(){
        $query = $this->db->query("SELECT id, title_1, title_2, image, title_button, link FROM tbl_block_1 WHERE status = 1
                                    ORDER BY id DESC");
        return $query->fetchAll();
    }

    function get_data_block2(){
        $query = $this->db->query("SELECT * FROM tbl_block_2 WHERE id  = 1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_data_block4(){
        $query = $this->db->query("SELECT * FROM tbl_block_4 WHERE id  = 1");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_dât_block_5(){
        $query = $this->db->query("SELECT id, ")
    }
/////////////////////////////////////end cac ham khac ///////////////////////////////////////////////////////////////////////
}

?>
