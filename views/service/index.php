<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/breadcrumbs-bg.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Dịch vụ</h6>
                <h1 class="breadcrumbs-custom-title">Ivyvet center</h1>
            </div>
        </div>
    </div>
</section>
<!-- A Few Words About Us-->
<section class="section section-xs bg-gray-light">
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between align-items-center">
            <div class="col-md-10 col-lg-6 col-xl-5">
                <h3>Các dịch vụ chúng tôi cung cấp</h3>
                <p>Lamias sunt verpas de castus sensorem. Castor de talis nutrix, vitare onus! Hercle, demolitione
                    lotus!, velox fides! Eheu, accola! Cum lacta experimentum, omnes capioes demitto lotus, teres
                    caesiumes.</p>
                <p>Est clemens adiurator, cesaris. Cum luna crescere, omnes boreases locus talis, superbus eraes. Cum
                    fuga prarere, omnes lamiaes magicae alter, lotus scutumes. Idoleums velum in virundum! Barbatus,
                    magnum musas patienter examinare de alter, bassus ratione.</p>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-7">
                <div class="offset-xxl-negative-130">
                    <img src="<?php echo URL.'/styles/' ?>images/services-1-804x552.png" 
                        alt="" 
                        width="804"
                        height="552" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="section-lg text-center">
    <div class="container">
        <h3>Dịch vụ</h3>
        <p>
            <span class="text-width-1">
                As the most qualified accounting services provider, we offer an amazing variety of
                financial solutions designed to help you solve all bookkeeping issues, no matter big or small.
            </span>
        </p>
        <div class="row row-30 row-md-50 row-xxl-70 offset-top-2">
            <?php
            for($i = 1; $i <= 8; $i++){
            ?>
            <div class="col-sm-6 col-lg-3">
                <article class="thumbnail-light">
                    <a class="thumbnail-light-media" href="single-service.html">
                        <img class="thumbnail-light-image" src="<?php echo URL.'/styles/' ?>images/service-thumbnail-1-270x200.jpg" 
                            alt=""
                            width="270" 
                            height="200" />
                    </a>
                    <h5 class="thumbnail-light-title">
                        <a href="single-service.html">Xem thêm</a>
                    </h5>
                </article>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- Testimonials-->
<section class="section section-lg section-decorated-22">
    <div class="decor-1">
        <img src="<?php echo URL.'/styles/' ?>images/bubbles-293x427.png" alt="" width="293" height="427" />
    </div>
    <div class="container">
        <h3 class="text-center">Khách hàng nói về chúng tôi</h3>
        <div class="owl-carousel" 
            data-items="1" 
            data-md-items="2" 
            data-dots="true" 
            data-nav="false" 
            data-loop="true"
            data-margin="30" 
            data-stage-padding="0" 
            data-mouse-drag="false">
            <?php
            for($i = 1; $i <= 4; $i++){
            ?>
            <div class="wow-outer">
                <blockquote class="quote-modern quote-modern-big wow slideInLeft">
                    <svg class="quote-modern-mark" x="0px" y="0px" width="35px" height="25px" viewbox="0 0 35 25">
                        <path
                            d="M27.461,10.206h7.5v15h-15v-15L25,0.127h7.5L27.461,10.206z M7.539,10.206h7.5v15h-15v-15L4.961,0.127h7.5                L7.539,10.206z">
                        </path>
                    </svg>
                    <div class="quote-modern-text">
                        <p>I was impressed by the quality of what your specialists did. They quickly found out what was
                            the main problem of my company and helped me to form a correct strategy.</p>
                    </div>
                    <div class="quote-modern-meta">
                        <div class="quote-modern-avatar">
                            <img src="<?php echo URL.'/styles/' ?>images/testimonials-person-3-96x96.jpg" 
                                alt=""
                                width="96" 
                                height="96" />
                        </div>
                        <div class="quote-modern-info">
                            <cite class="quote-modern-cite">Albert Webb</cite>
                            <p class="quote-modern-caption">CEO at Majestic</p>
                        </div>
                    </div>
                </blockquote>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>