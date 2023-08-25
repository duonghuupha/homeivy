<?php
include('layouts/header.php');
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-bg.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Contacts</h6>
                <h1 class="breadcrumbs-custom-title">Contacts</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contacts</li>
            </ul>
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
                        <li><a class="link-default" href="tel:#">1-800-1234-678</a></li>
                        <li><a class="link-default" href="tel:#">1-800-9876-098</a></li>
                    </ul>
                </div>
            </div>
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp">
                    <div class="icon icon-lg mdi mdi-email text-primary"></div>
                    <div><a class="link-default" href="mailto:#">info@demolink.org</a></div>
                </div>
            </div>
            <div class="layout-bordered-item wow-outer">
                <div class="layout-bordered-item-inner wow slideInUp">
                    <div class="icon icon-lg mdi mdi-map-marker text-primary"></div>
                    <div><a class="link-default" href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
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
                        <h3 class="wow-outer"><span class="wow slideInDown">Contact Us</span></h3>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                            method="post" action="bat/rd-mailform.php">
                            <div class="row row-10">
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-first-name">First Name</label>
                                        <input class="form-input" id="contact-first-name" type="text" name="name"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-md-6 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-last-name">Last Name</label>
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
                                        <label class="form-label-outside" for="contact-phone">Phone</label>
                                        <input class="form-input" id="contact-phone" type="text" name="phone"
                                            data-constraints="@Required @PhoneNumber">
                                    </div>
                                </div>
                                <div class="col-12 wow-outer">
                                    <div class="form-wrap wow fadeSlideInUp">
                                        <label class="form-label-outside" for="contact-message">Your Message</label>
                                        <textarea class="form-input" id="contact-message" name="message"
                                            data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="group group-middle">
                                <div class="wow-outer">
                                    <button class="button button-primary button-winona wow slideInRight"
                                        type="submit">Send Message</button>
                                </div>
                                <p>or use</p>
                                <div class="wow-outer"><a
                                        class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft"
                                        href="#"><span
                                            class="icon text-primary mdi mdi-facebook-messenger"></span>Messenger</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell-xl-5 height-fill wow fadeIn">
            <div class="google-map-container" data-marker="images/gmap_marker.png"
                data-marker-active="images/gmap_marker_active.png"
                data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]"
                data-zoom="5" data-x="-73.9874068" data-y="40.643180">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                        data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
include('layouts/footer.php');
?>