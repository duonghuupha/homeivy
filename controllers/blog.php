<?php
class Blog extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('blog/index');
        require('layouts/footer.php');
    }

    function detail(){
        require('layouts/header.php');
        $this->view->render('blog/detail');
        require('layouts/footer.php');
    }
}
?>