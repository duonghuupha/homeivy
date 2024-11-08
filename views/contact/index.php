<?php
$item = $this->_Data->get_setting();
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/bg_breach.png);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Liên hệ</h6>
                <h1 class="breadcrumbs-custom-title">Liên hệ</h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-sm">
    <div class="container">
        <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp">
                    <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                    <ul class="list-0">
                        <li><a class="link-default" href="tel:<?php echo $item[0]['hotline_1'] ?>"><?php echo $item[0]['hotline_1'] ?></a></li>
                        <li><a class="link-default" href="tel:<?php echo $item[0]['hotline_2'] ?>"><?php echo $item[0]['hotline_2'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp">
                    <div class="icon icon-lg mdi mdi-email text-primary"></div>
                    <div><a class="link-default" href="mailto:<?php echo $item[0]['email'] ?>"><?php echo $item[0]['email'] ?></a></div>
                </div>
            </div>
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp">
                    <div class="icon icon-lg mdi mdi-map-marker text-primary"></div>
                    <div>
                        <a class="link-default" href="javascript:void(0)">
                            <?php echo $item[0]['address'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-gray-100">
    <div class="range justify-content-xl-between">
        <div class="cell-xl-6 align-self-center container">
            <div class="row">
                <div class="col-lg-9 cell-inner">
                    <div class="section-lg">
                        <h3 class="wow-outer"><span class="wow slideInDown">Liên hệ</span></h3>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post">
                            <div class="row row-10">
                                <div class="col-md-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-last-name">Họ và tên</label>
                                        <input class="form-input" id="contact-last-name" type="text" name="name"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-email">E-mail</label>
                                        <input class="form-input" id="contact-email" type="email" name="email"
                                            data-constraints="@Required @Email">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-phone">Điện thoại</label>
                                        <input class="form-input" id="contact-phone" type="text" name="phone"
                                            data-constraints="@Required @PhoneNumber">
                                    </div>
                                </div>
                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-message">Nội dung liên hệ</label>
                                        <textarea class="form-input" id="contact-message" name="message"
                                            data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="group group-middle">
                                <div class="wow-outer">
                                    <button class="button button-primary button-winona wow slideInRight" type="button">Gửi liên hệ</button>
                                </div>
                                <p>hoặc sử dụng</p>
                                <div class="wow-outer">
                                    <a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="javascript:void(0)">
                                        <span class="icon text-primary mdi mdi-facebook-messenger"></span>Messenger
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell-xl-5 height-fill wow fadeIn">
            <?php echo $item[0]['google_map'] ?>
        </div>
    </div>
</section>