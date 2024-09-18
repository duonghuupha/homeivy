<?php
class Service extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('service/index');
        require('layouts/footer.php');
    }

    function detail(){
        require('layouts/header.php');

        $id = base64_decode($_REQUEST['id']);
        $jsonObj = $this->model->get_detail($id);
        $this->view->jsonObj = $jsonObj;

        $this->view->render('service/detail');
        require('layouts/footer.php');
    }
}
?>