<?php  
$setting = $this->_Data->get_setting();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="vi">

<head>
    <title><?php echo $setting[0]['title'] ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo URL_IMAGE ?>/other/<?php echo $setting[0]['icon'] ?>" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>css/style.css">
</head>
<body>
    <div class="preloader">
        <div class="preloader-logo">
            <img src="<?php echo URL_IMAGE ?>/other/<?php echo $setting[0]['logo'] ?>" alt="" width="167" height="44" />
        </div>
        <div class="preloader-body">
            <div id="loadingProgressG">
                <div class="loadingProgressG" id="loadingProgressG_1"></div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" 
                    data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" 
                    data-md-layout="rd-navbar-fixed"
                    data-md-device-layout="rd-navbar-fixed" 
                    data-lg-layout="rd-navbar-static"
                    data-lg-device-layout="rd-navbar-fixed" 
                    data-xl-layout="rd-navbar-static"
                    data-xl-device-layout="rd-navbar-static" 
                    data-xxl-layout="rd-navbar-static"
                    data-xxl-device-layout="rd-navbar-static" 
                    data-lg-stick-up-offset="118px"
                    data-xl-stick-up-offset="118px" 
                    data-xxl-stick-up-offset="118px" 
                    data-lg-stick-up="true"
                    data-xl-stick-up="true" 
                    data-xxl-stick-up="true">
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap">
                                    <span></span>
                                </button>
                                <a class="rd-navbar-brand" href="/">
                                    <img src="<?php echo URL_IMAGE ?>/other/<?php echo $setting[0]['logo'] ?>" alt="" width="167" height="44" />
                                </a>
                            </div>
                            <div class="rd-navbar-collapse">
                                <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content">
                                    <span></span>
                                </button>
                                <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content">
                                    <article class="unit align-items-center">
                                        <div class="unit-left">
                                            <span class="icon icon-md icon-modern mdi mdi-phone"></span>
                                        </div>
                                        <div class="unit-body">
                                            <ul class="list-0">
                                                <li><a class="link-default" href="tel:<?php echo $setting[0]['hotline_1'] ?>"><?php echo $setting[0]['hotline_1'] ?></a></li>
                                                <li><a class="link-default" href="tel:<?php echo $setting[0]['hotline_2'] ?>"><?php echo $setting[0]['hotline_2'] ?></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="unit align-items-center">
                                        <div class="unit-left">
                                            <span class="icon icon-md icon-modern mdi mdi-map-marker"></span>
                                        </div>
                                        <div class="unit-body">
                                            <a class="link-default text-nowrap" href="javascript:void(0)">
                                                <?php echo $setting[0]['address'] ?>
                                            </a>
                                        </div>
                                    </article>
                                    <a class="button button-primary-outline button-winona" href="tel:<?php echo $setting[0]['hotline_1'] ?>">Yêu cầu cuộc gọi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap">
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search" id="rd-navbar-search">
                                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle="#rd-navbar-search">
                                        <span></span>
                                    </button>
                                    <form class="rd-search" data-search-live="rd-search-results-live" method="Post">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-navbar-search-form-input">Tìm kiếm...</label>
                                            <input class="form-input rd-navbar-search-form-input"
                                                id="rd-navbar-search-form-input" 
                                                type="text" 
                                                name="s"
                                                autocomplete="off">
                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                        </div>
                                        <button class="rd-search-form-submit fa-search" type="button"></button>
                                    </form>
                                </div>
                                <ul class="rd-navbar-nav">
                                    <?php
                                    $menu_p  = $this->_Data->get_menu_parent();
                                    foreach($menu_p as $row_m_p){
                                        $menu_s = $this->_Data->get_menu_sub($row_m_p['id']);
                                        $link_p = $this->_Convert->return_link_menu($row_m_p['id'], $row_m_p['title'], $row_m_p['type'], $row_m_p['link']);
                                        echo '<li class="rd-nav-item"><a class="rd-nav-link" href="'.$link_p.'">'.$row_m_p['title'].'</a>';
                                        echo (count($menu_s) > 0) ? '<ul class="rd-menu rd-navbar-dropdown"><li class="rd-dropdown-item">' : '';
                                        foreach($menu_s as $row_m_s){
                                            $link_s = $this->_Convert->return_link_menu($row_m_s['id'], $row_m_s['title'], $row_m_s['type'], $row_m_s['link']);
                                            echo '<a class="rd-dropdown-link" href="'.$link_s.'">'.$row_m_s['title'].'</a>';
                                        }
                                        echo (count($menu_s) > 0) ? '</li></ul>' : '';
                                        echo '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>