@extends('layouts.common')
@section('title', 'Ganesan Enterprise')
@section('main-content')

<?php 
    $pageid="home";
?>

    <div class="preloader"></div>
    <!--Main Slider-->
    <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/home-banner-image3.png"
                        data-saveperformance="off" data-title="Awesome Title Here">
                        <img src="images/home-banner-image3.png" alt="" data-bgposition="center top" data-bgfit="cover"
                            data-bgrepeat="no-repeat">

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="-100" data-speed="1500" data-start="0" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2>We Give Life to Your Home</h2>
                        </div>

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="-10" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text">An Exclusive Product Outlet Located at Manchester of South India - Coimbatore.
                            </div>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="100" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="/Products"
                                class="theme-btn btn-style-one">Our Products</a> &ensp; <a href="https://ganesanenterprises.com/Contact-Us#contact-section"
                                class="theme-btn btn-style-two">Reach Us</a></div>


                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                        data-thumb="images/home-banner-image1.png" data-saveperformance="off" data-title="Awesome Title Here">
                        <img src="images/home-banner-image1.png" alt="" data-bgposition="center top" data-bgfit="cover"
                            data-bgrepeat="no-repeat">

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="-100" data-speed="1500" data-start="0" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2>OUR SLEEP & COMFORT SOLUTIONS</h2>
                        </div>

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="-10" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text text-center">Best of Mattress, Pillows, Bed Linens & Sleep Accessories.</div>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="100" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="/Products"
                                class="theme-btn btn-style-one">Our Products</a> &ensp; <a href="https://ganesanenterprises.com/Contact-Us#contact-section"
                                class="theme-btn btn-style-two">Reachs Us</a></div>


                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                        data-thumb="images/home-banner-image2.png" data-saveperformance="off" data-title="Awesome Title Here">
                        <img src="images/home-banner-image2.png" alt="" data-bgposition="center top" data-bgfit="cover"
                            data-bgrepeat="no-repeat">

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="-100" data-speed="1500" data-start="0" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2>Best of Style and Health</h2>
                        </div>

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="-10" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text text-center">Antibacterial Cotton Bed Linen for Your Sleep Space.</div>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme" data-x="center" data-hoffset="15" data-y="center"
                            data-voffset="100" data-speed="1500" data-start="1000" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="/Products"
                                class="theme-btn btn-style-one">Our Products</a> &ensp; <a href="https://ganesanenterprises.com/Contact-Us#contact-section"
                                class="theme-btn btn-style-two">Reach Us</a></div>


                    </li>

                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>

    <!--welcome-section-->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--welcome-column-->
                <div class="col-md-6 col-sm-6 col-xs-12 welcome-column">
                    <!--inner-content-->
                    <div class="inner-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h2>About Us</h2>
                        <h3>We Have The Right Products to Fit Your Needs and  <span>Budget.</span></h3>

                        <div class="text">You spend up to a third of your life in bed. It’s a place of comfort, a refuge
                            from a long day and it’s where sleep happens. We are dedicated to making sure each of our
                            customers get the best night’s sleep possible, starting with their mattress. </div>
                        <!-- <figure class="signature">
                            <img src="images/icons/signature.png" alt="" />
                            </figure> -->

                        <!--author-title-->
                        <!-- <div class="author-title">
                            <div class="author-info">William Shocks, <span>Founder</span></div>
                                <div class="author-designation"></div>
                            </div> -->
                    </div>
                </div>

                <!--service-column-->
                <div class="col-md-6 col-sm-6 col-xs-12 service-column">
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-avatar-1"></span>
                            </div>
                            <h3>WE ARE PROFESSIONAL</h3>
                            <!-- <div class="category"><a href="#">Designers</a></div> -->
                            <div class="text">How we keep our bedroom, speaks volume about who we are as a person.
                                Whether you like it clean and tidy or whether you like to keep it minimalistic, your bedroom
                                decor reflects your personality.</div>
                        </div>
                    </div>
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-correct"></span>
                            </div>
                            <h3>OUR BACKBONE</h3>
                            <!-- <div class="category"><a href="#">Team Members</a></div> -->
                            <div class="text">All our sleep solutions are made in-house with utmost attention to detail
                                and quality. Our fully backward integrated manufacturing facilities across 8 locations is
                                what helps us bridge the gap between sleep and technology.</div>
                        </div>
                    </div>
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-compass"></span>
                            </div>
                            <h3>BACKED BY EXPERTS</h3>
                            <!-- <div class="category"><a href="#">Interiors</a></div> -->
                            <div class="text">Creating new benchmarks for the category, we created the Duropedic range
                                with our exclusive 5 zoned orthopedic support layer which is tested and recommended by the
                                experts at the National Health Academy.

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--best-service-section-->
    <section class="best-service-section">
        <div class="auto-container">

            <!--sec-title-->
            <!-- <div class="sec-title clearfix">
                    <h2 class="pull-left">Our Best Services</h2>
                    <a class="service-link pull-right" href="#">More Services <span class="fa fa-caret-right"></span></a>
                </div> -->

            <div class="row clearfix">

                <div class="title-categories">
                    <h2>Categories</h2>
                </div>

                <!--service-block-two-->
                <div class="service-block-two col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer">
                        </div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <img src="./images/mattress.png" alt="">
                        </div>

                        <h3>Mattress</h3>
                        <div class="text">A good night’s sleep is a key to overall wellbeing. As per the studies, an
                            average adult needs around 7-8 hours of peaceful sleep to be healthy.</div>
                        <a href="/Products" class="read-more read-more1">View Products</a>

                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <img src="./images/mattress.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="service-block-two col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer">
                        </div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <img src="./images/pillow.png" alt="">
                        </div>

                        <h3>Pillows</h3>
                        <div class="text">Pillows are an important part of your sleep space, since they provide comfort
                            at the end of a long day. They give support to your head and spine when you sleep at night.</div>
                        <a href="/Products" class="read-more read-more1">View Products</a>

                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <img src="./images/pillow.png" alt="">
                        </div>

                    </div>
                </div>

                <div class="service-block-two col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer">
                        </div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <img src="./images/bed-sheets.png" alt="">
                        </div>

                        <h3>Bed linen</h3>
                        <div class="text">Comfortable bed sheets help you keep your body temperature stable by regulating
                            the temperature of your sleep space. Quality bed sheets, on the other hand, have additional
                            advantages.
                        </div>
                        <a href="/Products" class="read-more read-more2">View Products</a>

                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <img src="./images/bed-sheets.png" alt="">
                        </div>

                    </div>
                </div>

                <div class="service-block-two col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer">
                        </div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <img src="./images/sleep-mat.png" alt="">
                        </div>

                        <h3>Sleep accessories</h3>
                        <div class="text">This multi-purpose, double-sided slim cushion can be used as extra seating for 
                        lounging with a book, meditating, or for a movie-watching party.</div>
                        <a href="/Products" class="read-more read-more1">View Products</a>

                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <img src="./images/sleep-mat.png" alt="">
                        </div>

                    </div>
                </div>

                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12" style="display:none;">
                    <!-- inner-box -->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)">
                        </div> -->
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-two"></span>
                        </div>

                        <h3>Furniture Work</h3>
                        <div class="text">We will give you complete account of the system, and expound the of the great
                            explorer of the truth.</div>
                        <a href="#" class="read-more">Read More</a>

                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-dinner"></span>
                        </div>

                    </div>
                </div>

                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12" style="display: none;">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)">
                        </div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-bright-lightbulb"></span>
                        </div>

                        <h3>Lighting Works</h3>
                        <div class="text">Expound the actual teachings of explorer of truth masters builder of human
                            happiness.</div>
                        <a href="#" class="read-more">Read More</a>

                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-bright-lightbulb"></span>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>



    <!--tabbed-shop-section-->
    <section class="tabbed-shop-section">
        <div class="auto-container">

            <div class="sec-title-four sec-title-four2">
                <h2>From The Shop</h2>
            </div>

            <!--Shop Tabs Box-->
            <div class="shop-tabs-box">
                <!--Tab Buttons-->
                <ul class="tab-buttons">
                    <li data-tab="#tab-one" class="tab-btn tab-btn3 active-btn">Mattress</li>
                    <li data-tab="#tab-two" class="tab-btn tab-btn3">Pillows</li>
                    <li data-tab="#tab-three" class="tab-btn tab-btn3">Bed linen</li>
                    <li data-tab="#tab-four" class="tab-btn tab-btn3">Sleep accessories</li>
                    <!-- <li data-tab="#tab-five" class="tab-btn">Kitchen</li> -->
                </ul>

                <!--Tabs Content-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="shop-tab active-tab" id="tab-one">
                        <div class="tabbed-shop-carousel">

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress1.webp"><img src="images/mattress1.webp" alt=""></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Edge Dual Sided Foam Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--<div class="default-shop-item">-->
                                <!--inner-box-->
                            <!--    <div class="inner-box">-->
                                    <!--image-box-->
                            <!--        <figure class="image-box">-->
                            <!--            <a class="zoom-btn lightbox-image" data-fancybox="gallery"-->
                            <!--                            data-caption="Caption Images 1"-->
                            <!--                            href="images/mattress2.webp"><img src="images/mattress2.webp" alt="" /></a>-->
                            <!--            <div class="item-sale-tag new">New</div>-->
                            <!--        </figure>-->

                                    <!--lower-content-->
                            <!--        <div class="lower-content">-->
                            <!--            <h3><a href="/Products">LiveIn 2 in 1 Dual Sided Roll Pack Mattress</a></h3>-->

                            <!--            <div class="rating">-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--            </div>-->

                            <!--            <div class="price">$ 19.00 <span>$ 25.00</span></div>-->
                            <!--            <div class="links-box">-->
                            <!--                <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>-->
                            <!--                <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                            <!--                    ><i-->
                            <!--                        class="fa-solid fa-square-phone-flip"></i></a>-->
                            <!--                <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                            <!--                    ><i class="fa-brands fa-square-whatsapp"></i></a>-->
                            <!--            </div>-->
                            <!--        </div>-->

                            <!--    </div>-->
                            <!--</div>-->

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/mattress3.webp"><img src="images/mattress3.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Rise Spring Soft Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 20.00</div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/mattress4.webp"><img src="images/mattress4.webp" alt="" /></a>
                                        <div class="item-sale-tag top">Top</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Up Right Orthopedic Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--<div class="default-shop-item">-->
                                <!--inner-box-->
                            <!--    <div class="inner-box">-->
                                    <!--image-box-->
                            <!--        <figure class="image-box">-->
                            <!--            <a class="zoom-btn lightbox-image" data-fancybox="gallery"-->
                            <!--                            href="images/mattress5.webp"><img src="images/mattress5.webp" alt="" /></a>-->
                            <!--        </figure>-->

                                    <!--lower-content-->
                            <!--        <div class="lower-content">-->
                            <!--            <h3><a href="/Products">LiveIn Memory Foam Mattress</a></h3>-->

                            <!--            <div class="rating">-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--            </div>-->

                            <!--            <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                            <!--            <div class="links-box">-->
                            <!--                <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>-->
                            <!--                <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                            <!--                    ><i-->
                            <!--                        class="fa-solid fa-square-phone-flip"></i></a>-->
                            <!--                <a class="add-to-favorite"-->
                            <!--                    href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                            <!--                    ><i class="fa-brands fa-square-whatsapp"></i></a>-->
                            <!--            </div>-->
                            <!--        </div>-->

                            <!--    </div>-->
                            <!--</div>-->
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress1.webp"><img src="images/mattress1.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Back Magic Orthopedic Coir Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--<div class="default-shop-item">-->
                                <!--inner-box-->
                            <!--    <div class="inner-box">-->
                                    <!--image-box-->
                            <!--        <figure class="image-box">-->
                            <!--            <a class="zoom-btn lightbox-image" data-fancybox="gallery"-->
                            <!--                            href="images/mattress8.webp"><img src="images/mattress8.webp" alt="" /></a>-->
                            <!--        </figure>-->

                                    <!--lower-content-->
                            <!--        <div class="lower-content">-->
                            <!--            <h3><a href="/Products">LiveIn Orthopedic Memory Foam Mattress</a></h3>-->

                            <!--            <div class="rating">-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--                <span class="fa fa-star"></span>-->
                            <!--            </div>-->

                            <!--            <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                            <!--            <div class="links-box">-->
                            <!--                <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>-->
                            <!--                <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                            <!--                    ><i-->
                            <!--                        class="fa-solid fa-square-phone-flip"></i></a>-->
                            <!--                <a class="add-to-favorite"-->
                            <!--                    href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                            <!--                    ><i class="fa-brands fa-square-whatsapp"></i></a>-->
                            <!--            </div>-->
                            <!--        </div>-->

                            <!--    </div>-->
                            <!--</div>-->
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress7.webp"><img src="images/mattress7.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Back Magic Pro Orthopedic Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress9.webp"><img src="images/mattress9.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Rise Up Spring Mattress With Pillow Top</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress10.webp"><img src="images/mattress10.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Boltt Plush Spring Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress11.webp"><img src="images/mattress11.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Balance Orthopedic Memory Foam Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress12.webp"><img src="images/mattress12.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Strength Memory Foam Coir Orthopedic Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress13.webp"><img src="images/mattress13.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Propel Pocket Spring Mattress
</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress14.webp"><img src="images/mattress14.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Boltt Plus Spring Mattress with Euro Top</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/mattress15.webp"><img src="images/mattress15.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Tatva Natural Latex and Coir Mattress</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                    <!--Tab-->
                    <div class="shop-tab" id="tab-two">
                        <div class="tabbed-shop-carousel">

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(2).webp"><img src="images/pillows(2).webp" alt="" /></a>
                                        <div class="item-sale-tag new">New</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Zeal Microfibre Antimicrobial Pillow</a>
                                        </h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(4).webp"><img src="images/pillows(4).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Snuggle High Quality Fibre Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 20.00</div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(6).webp"><img src="images/pillows(6).webp" alt="" /></a>
                                        <div class="item-sale-tag top">Top</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Life Contoured Dual Height Antimicrobial
                                                Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(8).webp"><img src="images/pillows(8).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Life Contoured Dual Height Antimicrobial
                                                Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span> 
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(1).webp"><img src="images/pillows(1).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Nidraa 100% Natural Latex Contoured Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(3).webp"><img src="images/pillows(3).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Nile Coffee Table</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(5).webp"><img src="images/pillows(5).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Life Contoured Dual Height Antimicrobial Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(7).webp"><img src="images/pillows(7).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Walton Single SofaDuroflex Neck Pro Orthopedic Support Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(9).webp"><img src="images/pillows(9).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Happy Soft Lightweight High Quality Fibre Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(10).webp"><img src="images/pillows(10).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Energy Cool Gel Antimicrobial Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(11).webp"><img src="images/pillows(11).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Energy Cool Gel Antimicrobial Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(12).jpg"><img src="images/pillows(12).jpg" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Duroflex Life Contoured Dual Height Antimicrobial
                                                Pillow</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            

                        </div>
                    </div>

                    <!--Tab-->
                    <div class="shop-tab" id="tab-three">
                        <div class="tabbed-shop-carousel">

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet1.webp"><img src="images/bedsheet1.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Elegance Blue 100% Cotton Antibacterial Bedsheet Set
                                                - Elements Classic</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet3.webp"><img src="images/bedsheet3.webp" alt="" /></a>
                                        <div class="item-sale-tag new">New</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Tropical Blue 100% Cotton Antibacterial Bedsheet Set
                                                - Splendour Classic</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet5.webp"><img src="images/bedsheet5.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Serene Mauve 100% Cotton Super Soft Antibacterial
                                                Bedsheet Set - Splendour Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 20.00</div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet2..webp"><img src="images/bedsheet2..webp" alt="" /></a>
                                        <div class="item-sale-tag top">Top</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Tropical Brown 100% Cotton Antibacterial Bedsheet
                                                Set - Splendour Classic</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet4.webp"><img src="images/bedsheet4.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Chintz Pink 100% Cotton Super Soft Antibacterial
                                                Bedsheet Set - Splendour Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(6).webp"><img src="images/bedsheet(6).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Digital Imperia Grey 100% Cotton Super Soft Antibacterial Bedsheet Set - Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(7).webp"><img src="images/bedsheet(7).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Royale Grey 100% Cotton Super Soft Antibacterial Bedsheet Set - Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(8).webp"><img src="images/bedsheet(8).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Digital Gem Blue 100% Cotton Super Soft Antibacterial Bedsheet Set - Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(9).webp"><img src="images/bedsheet(9).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Meadow 100% Cotton Super Soft Mercerised Antibacterial Bedsheet Set-Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(10).webp"><img src="images/bedsheet(10).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Moderne Teal 100% Cotton Antibacterial Bedsheet Set-Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(11).webp"><img src="images/bedsheet(11).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Edenia Teal 100% Cotton Antibacterial Bedsheet Set-Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(12).webp"><img src="images/bedsheet(12).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Popsicle Blue 100% Cotton Antibacterial Bedsheet Set-Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(13).webp"><img src="images/bedsheet(13).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Sway Blue 100% Cotton Antibacterial Bedsheet Set-Grandeur Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(14).webp"><img src="images/bedsheet(14).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Sheen Blue 100% Cotton Super Soft Antibacterial Bedsheet Set - Splendour Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/bedsheet(15).webp"><img src="images/bedsheet(15).webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="/Products">Interlace Pink 100% Cotton Super Soft Antibacterial Bedsheet Set - Splendour Prime</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                    <!--Tab-->
                    <div class="shop-tab" id="tab-four">
                        <div class="tabbed-shop-carousel">

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/sleep-accessories.jpg"><img src="images/sleep-accessories.jpg" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                         <h3><a href="/Products">Lightweight Travel Friendly Slim Mattress</a></h3> 

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/sleep-accessories2.webp"><img src="images/sleep-accessories2.webp" alt="" /></a>
                                        <div class="item-sale-tag new">New</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                         <h3><a href="/Products">Antiviral Mattress Protector</a></h3> 

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/sleep-accessories5.jpg"><img src="images/sleep-accessories5.jpg" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                         <h3><a href="/Products">Duroflex Snug Comforter</a></h3> 

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 20.00</div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/sleep-accessories(1).webp"><img src="images/sleep-accessories(1).webp" alt="" /></a>
                                        <div class="item-sale-tag top">Top</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                         <h3><a href="/Products">Duroflex Snug Comforter Bed Linens</a></h3> 

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/sleep-accessories1.webp"><img src="images/sleep-accessories1.webp" alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                         <h3><a href="/Products">Lightweight Travel Friendly Slim Mattress Varieties</a></h3> 

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><i
                                                    class="fa-solid fa-square-phone-flip"></i></a>
                                            <a class="add-to-favorite"
                                                href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                ><i class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>

                    <!--Tab-->
                    <div class="shop-tab" id="tab-five">
                        <div class="tabbed-shop-carousel">

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/resource/products/image-1.jpg"><img src="images/resource/products/image-1.jpg"
                                                alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Walton Single Sofa</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/resource/products/image-2.jpg"><img src="images/resource/products/image-2.jpg"
                                                alt="" /></a>
                                        <div class="item-sale-tag new">New</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Greeney Study Chair</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/resource/products/image-3.jpg"><img src="images/resource/products/image-3.jpg"
                                                alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Nile Coffee Table</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 20.00</div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/resource/products/image-4.jpg"><img src="images/resource/products/image-4.jpg"
                                                alt="" /></a>
                                        <div class="item-sale-tag top">Top</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Fabric Sofa 3 Set</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/resource/products/image-1.jpg"><img src="images/resource/products/image-1.jpg"
                                                alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Walton Single Sofa</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        href="images/resource/products/image-2.jpg"><img src="images/resource/products/image-2.jpg"
                                                alt="" /></a>
                                        <div class="item-sale-tag new">New</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Greeney Study Chair</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a href="#"><img src="images/resource/products/image-3.jpg"
                                                alt="" /></a>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Nile Coffee Table</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 20.00</div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="default-shop-item">
                                <!--inner-box-->
                                <div class="inner-box">
                                    <!--image-box-->
                                    <figure class="image-box">
                                        <a href="#"><img src="images/resource/products/image-4.jpg"
                                                alt="" /></a>
                                        <div class="item-sale-tag top">Top</div>
                                    </figure>

                                    <!--lower-content-->
                                    <div class="lower-content">
                                        <h3><a href="#">Fabric Sofa 3 Set</a></h3>

                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                        <div class="links-box">
                                            <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">REACH US</a>
                                            <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                ><span class="fa fa-search-plus"
                                                    title="Quick View"></span></a>
                                            <a class="add-to-favorite" href="#" ><i
                                                    class="fa-brands fa-square-whatsapp"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <!--Gallery Section-->
    <section class="gallery-section" style="display: none;">
        <div class="auto-container">

            <!--Section Title-->
            <!-- <div class="sec-title-four">
                    <h2>Recent Projects</h2>
                </div> -->

            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters text-center">
                    <div class="icon-box"><span class="fa fa-picture-o"></span></div>

                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
                        <li class="filter" data-role="button" data-filter=".painting">Painting</li>
                        <li class="filter" data-role="button" data-filter=".flooring">Flooring</li>
                        <li class="filter" data-role="button" data-filter=".tile-marble">Tile &amp; Marble</li>
                        <li class="filter" data-role="button" data-filter=".furniture">Furniture</li>
                        <li class="filter" data-role="button" data-filter=".lighting">Lighting</li>
                    </ul>
                </div>


                <div class="items-container clearfix">

                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all tile-marble">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all tile-marble lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all flooring tile-marble furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all painting flooring furniture">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all painting tile-marble furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 default-portfolio-item masonry-item all painting flooring tile-marble">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/7.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 default-portfolio-item masonry-item all flooring furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="#" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="#">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--End Sortable Masonry -->

            <div class="text-center padd-top-50"><a class="theme-btn btn-style-two" href="#">More Projects</a>
            </div>

        </div>


    </section>


    <!--call-to-action-->
    <section class="call-to-action" style="background-image:url(images/background/image-1.jpg); display: none; ">
        <div class="auto-container">
            <div class="row">
                <div class="text">Join with Decorators and</div>
                <h2>Now Make Your Home More Lovely!</h2>

                <a class="theme-btn btn-style-one" href="#">Contact Us</a>
                <a class="theme-btn btn-style-two" href="#">Shop Now</a>

            </div>
        </div>
    </section>


    <!--default-two-column-->
    <section class="default-two-column">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="column spec-column spec-column1 col-md-6 col-sm-6 col-xs-12">
                    <!--sec-title-three-->
                    <div class="sec-title-three">
                        <!-- <div class="sub-title">Decorators</div> -->
                        <h2>Characteristics</h2>
                    </div>
                    <div class="text">Today we have grown into a sleep solutions company with a national footprint,
                        cutting edge products, many exclusive technologies and fully backward integrated manufacturing
                        facilities making us India’s fastest growing mattress brand.
                        Our offerings are now not only limited
                        <!--to research-backed and technology-led mattresses, pillows and sleep accessories but furniture and-->
                        <!--bed linen too.-->
                        </div>
                    <!--specs-->
                    <div class="specs clearfix">
                        <div class="row clearfix">
                            <!--spec-block-->
                            <div class="spec-block spec-block1 col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <img src="./images/mattress.png" alt="">
                                    </div>
                                    <h3>Mattress</h3>
                                </div>
                            </div>

                            <div class="spec-block col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <img src="./images/pillow.png" alt="">
                                    </div>
                                    <h3>Pillows</h3>
                                </div>
                            </div>

                            <div class="spec-block spec-block1 col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <img src="./images/bed-sheets.png" alt="">
                                    </div>
                                    <h3>Bed linen</h3>
                                </div>
                            </div>

                            <div class="spec-block spec-block2 col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <img src="./images/sleep-mat.png" alt="">
                                    </div>
                                    <h3>Sleep accessories</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="column form-column col-md-6 col-sm-6 col-xs-12">
                    <!--sec-title-three-->
                    <div class="sec-title-three">
                        <div class="sub-title">Request for</div>
                        <h2>Free Quotation</h2>
                    </div>

                    <!--form-box-->
                    <div class="form-box default-form wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="contact-form default-form">
                            <form method="post" action="/Formsubmit">
                                @csrf
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <!--<div class="form-box">-->
                                            <!--<span>Fillout this Field before Submit</span>-->
                                            <input id="name" type="text" name="username" value="" placeholder="Your Name *" required>
                                        <!--</div>-->
                                    </div>
                                    <!-- <div class="col-lg-6">-->
                                    <!--            <div class="form-box">-->
                                    <!--                <span>Fillout this Field before Submit</span>-->
                                    <!--                <input id="company_name" type="text" name="company_name" placeholder="Company Name" required />-->
                                    <!--            </div>-->
                                    <!--</div>-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value=""
                                            placeholder="Your Mail *" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="number" onkeypress="return isNumberKey(event);" pattern="[0-9]{10}" maxlength="10" value=""
                                            placeholder="Phone Number" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="subject">
                                             <option class="hidden">Subject</option> 
                                            <option>Mattress</option>
                                            <option>Pillows</option>
                                            <option>Bed Linen</option>
                                            <option>Sleep accessories</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two btn-style-two1">Get Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!--testimonial-style-one-->
    <section class="testimonial-style-one" style="background-image:url(images/background/image-2.jpg); display: none; ">
        <div class="auto-container">
            <div class="row">

                <div class="carousel-outer">
                    <div class="icon fa fa-quote-left"></div>
                    <div class="single-item-carousel">

                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text">By far the best theme I've ever purchased. They truly understood
                                    the look I was going for and completely nailed it! you how all this mistaken idea of
                                    denouncing pleasure pain was born and I will give you I would highly recommend
                                    Decorators Theme. </div>
                                <!--auther-info-->
                                <div class="auther-info">
                                    <div class="image"><img src="images/resource/author-thumb-3.jpg"
                                            alt="" /></div>
                                    <div class="auther-name">Jeorge Fernando</div>
                                    <div class="designation">Interior Theme</div>
                                </div>
                            </div>
                        </div>

                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text">By far the best theme I've ever purchased. They truly understood
                                    the look I was going for and completely nailed it! you how all this mistaken idea of
                                    denouncing pleasure pain was born and I will give you I would highly recommend
                                    Decorators Theme. </div>
                                <!--auther-info-->
                                <div class="auther-info">
                                    <div class="image"><img src="images/resource/author-thumb-3.jpg"
                                            alt="" /></div>
                                    <div class="auther-name">Jeorge Fernando</div>
                                    <div class="designation">Interior Theme</div>
                                </div>
                            </div>
                        </div>

                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text">By far the best theme I've ever purchased. They truly understood
                                    the look I was going for and completely nailed it! you how all this mistaken idea of
                                    denouncing pleasure pain was born and I will give you I would highly recommend
                                    Decorators Theme. </div>
                                <!--auther-info-->
                                <div class="auther-info">
                                    <div class="image"><img src="images/resource/author-thumb-3.jpg"
                                            alt="" /></div>
                                    <div class="auther-name">Jeorge Fernando</div>
                                    <div class="designation">Interior Theme</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



    <!--Sponsors Section-->
    <section class="sponsors-section" style="display: none;">
        <div class="auto-container">
            <!--Sponsors SLider-->
            <ul class="sponsors-carousel">
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/1.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+5</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/2.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+2</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/3.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+6</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/4.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+3</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/5.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+1</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/1.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+5</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/2.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+2</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/3.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+6</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/4.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+3</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/5.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+1</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/1.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+5</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/2.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+2</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/3.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+6</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/4.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+3</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/clients/5.png" alt=""></figure>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="overlay-content"><span class="count">+1</span><span
                                        class="text">Years<br>Experince</span></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!--News Section-->
    <section class="news-section" style="display:none;">
        <div class="auto-container">

            <div class="sec-title-four">
                <h2>Recent News</h2>
            </div>


            <div class="news-carousel two-column-carousel">

                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="images/resource/blog-image-1.jpg"
                                        alt=""><a class="overlay-link" href="#"><span
                                            class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="#">Our First Design For Interior</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Oct 03, 2015</a>
                                        </li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Furniture</a></li>
                                    </ul>
                                    <div class="text">How all this mistakens idea off denouncings pleasure and praising
                                        pain was born and get will give you a complete account.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="images/resource/author-thumb-1.jpg"
                                                alt=""></figure>
                                        <h4>Mark Nicholes</h4>
                                        <div class="designation">Team Leader</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="images/resource/blog-image-2.jpg"
                                        alt=""><a class="overlay-link" href="#"><span
                                            class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="#">Using High Quality Paints</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Aug 21, 2015</a>
                                        </li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Painting</a></li>
                                    </ul>
                                    <div class="text">Pleasure and praising pain was born and will give you a complete
                                        account of the systems, and expound the actual teaching.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="images/resource/author-thumb-2.jpg"
                                                alt=""></figure>
                                        <h4>William Harry</h4>
                                        <div class="designation">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="images/resource/blog-image-1.jpg"
                                        alt=""><a class="overlay-link" href="#"><span
                                            class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="#">Our First Design For Interior</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Oct 03, 2015</a>
                                        </li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Furniture</a></li>
                                    </ul>
                                    <div class="text">How all this mistakens idea off denouncings pleasure and praising
                                        pain was born and get will give you a complete account.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="images/resource/author-thumb-1.jpg"
                                                alt=""></figure>
                                        <h4>Mark Nicholes</h4>
                                        <div class="designation">Team Leader</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="images/resource/blog-image-2.jpg"
                                        alt=""><a class="overlay-link" href="#"><span
                                            class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="#">Using High Quality Paints</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Aug 21, 2015</a>
                                        </li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Painting</a></li>
                                    </ul>
                                    <div class="text">Pleasure and praising pain was born and will give you a complete
                                        account of the systems, and expound the actual teaching.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="images/resource/author-thumb-2.jpg"
                                                alt=""></figure>
                                        <h4>William Harry</h4>
                                        <div class="designation">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="images/resource/blog-image-1.jpg"
                                        alt=""><a class="overlay-link" href="#"><span
                                            class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="#">Our First Design For Interior</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Oct 03, 2015</a>
                                        </li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Furniture</a></li>
                                    </ul>
                                    <div class="text">How all this mistakens idea off denouncings pleasure and praising
                                        pain was born and get will give you a complete account.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="images/resource/author-thumb-1.jpg"
                                                alt=""></figure>
                                        <h4>Mark Nicholes</h4>
                                        <div class="designation">Team Leader</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="images/resource/blog-image-2.jpg"
                                        alt=""><a class="overlay-link" href="#"><span
                                            class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="#">Using High Quality Paints</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Aug 21, 2015</a>
                                        </li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Painting</a></li>
                                    </ul>
                                    <div class="text">Pleasure and praising pain was born and will give you a complete
                                        account of the systems, and expound the actual teaching.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="images/resource/author-thumb-2.jpg"
                                                alt=""></figure>
                                        <h4>William Harry</h4>
                                        <div class="designation">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--Newsletter Style One-->
    <section class="newsletter-style-one" style="display: none;">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="title-column col-lg-4 col-md-12 col-sm-12">
                    <h2>Newsletter Signup</h2>
                    <div class="text">We send you latest news couple a month ( No Spam).</div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <form method="post" action="#">
                            <div class="row clearfix">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="floated-icon fa fa-user"></span>
                                                <input type="text" name="email" value=""
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="floated-icon fa fa-envelope"></span>
                                                <input type="email" name="email" value=""
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn">Subscribe</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection