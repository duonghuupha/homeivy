<?php
class Blog extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');

        $id = base64_decode($_REQUEST['id']);
        $jsonObj = $this->model->get_info_menu($id);
        $this->view->jsonObj = $jsonObj;

        $rows = isset($_REQUEST['rows']) ? $_REQUEST['rows'] : 4;
        $get_pages = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $offset = ($get_pages-1)*$rows;
        $json = $this->model->get_list_blog($jsonObj[0]['link'], $offset, $rows);
        $this->view->json = $json; $this->view->perpage = $rows; $this->view->page = $get_pages;

        $this->view->render('blog/index');
        require('layouts/footer.php');
    }

    function detail(){
        require('layouts/header.php');

        $id = base64_decode($_REQUEST['id']);
        $jsonObj = $this->model->get_detail($id);
        $this->view->jsonObj = $jsonObj;

        $this->view->render('blog/detail');
        require('layouts/footer.php');
    }
}
?>