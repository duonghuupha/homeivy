<?php
class Contact extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('contact/index');
        require('layouts/footer.php');
    }
}
?>