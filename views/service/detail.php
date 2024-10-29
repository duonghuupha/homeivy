<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/breadcrumbs-bg.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Dịch vụ</h6>
                <h1 class="breadcrumbs-custom-title"><?php echo $this->jsonObj[0]['title'] ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-gray-light section-decorated-19">
    <div class="container">
        <div class="row row-30">
            <div class="col-sm-12 col-lg-12 wow-outer">
                <!-- Box Minimal-->
                <article class="box-minimal">
                    <div class="box-minimal-main wow-outer">
                        <p class="wow fadeInUpSmall"><?php echo $this->jsonObj[0]['info'] ?></p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- About This Service-->
<section class="section section-xs section-decorated-20">
    <div class="decor-1"><img src="<?php echo URL.'/styles/' ?>images/bubbles-171x230.png" alt="" width="171" height="230" /></div>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
            <div class="col-lg-7 col-xl-7" style="height:500px !important;overflow: auto;text-align:justify">
                <?php echo $this->jsonObj[0]['content'] ?>
            </div>
            <div class="col-lg-5 col-xl-5">
                <?php
                $width= 426; $height = 555;
                $image = $this->_Convert->convert_img('blog/images/', $this->jsonObj[0]['image'], $width, $height, 2);
                ?>
                <img src="<?php echo URL_IMAGE.'/blog/images/'.$this->jsonObj[0]['image'] ?>" alt="" width="426" height="555" />
            </div>
        </divclass=>
    </div>
</section>

<section class="section section-md bg-primary-darker text-center">
    <div class="container">
        <div class="box-cta-1">
            <h3>Liên hệ với chúng rôi để được tư vấn và nhận nhiều ưu đãi </h3>
            <a class="button button-lg button-primary button-winona" href="#">Đặt lịch hẹn ngay</a>
        </div>
    </div>
</section>