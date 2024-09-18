<?php
class Order extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('order/index');
        require('layouts/footer.php');
    }
}
?>