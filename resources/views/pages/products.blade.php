@extends('layouts.common')
@section('title', 'Ganesan Enterprises - Products')
@section('main-content')
<?php 
    $pageid="products";
?>



    <!--Page Title-->
    <section class="page-title" style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.5)),url(images/sleep-haven.png);">
        <div class="auto-container">
            <h1>Our Products</h1>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info" style="display:none;">
        <div class="auto-container clearfix">
            <div class="pull-left">
                <h2>Services</h2>
            </div>
            
        </div>
    </section>


    <!--tabbed-shop-section-->
    <section class="tabbed-shop-section tabbed-shop-section1">
        <div class="container">



            <!--Shop Tabs Box-->
            <div class="shop-tabs-box shop-tabs-box1">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 sticky-list" style="display:block">
                        <div class="sec-title-four sec-title-four1">
                            <h2 class="categories">Categories</h2>
                        </div>
                        <!--Tab Buttons-->
                        <ul class="tab-buttons tab-buttons1">
                            <li data-tab="#tab-one" data-target=".tabbed-shop-section" class="tab-btn active-btn tab-btn1 list-dec mattress-tab scroll-to-target">
                              <span class="collection_bullet_icon">➢</span>
                                Mattress
                            </li>  
                            <ul class="list-style">
                            <li data-tab="#tab-five" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Duropedic
                            </li>  
                            <li data-tab="#tab-six" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Energise
                            </li>  
                            <li data-tab="#tab-seven" data-target=".tabbed-shop-section" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Natural Living
                            </li>  
                            <li data-tab="#tab-eight" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Essential
                            </li>  
                            <li data-tab="#tab-nine" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Bed In A Box
                            </li>  
                            </ul>
                            <li data-tab="#tab-two" data-target=".tabbed-shop-section" class="tab-btn tab-btn1  list-dec pillow-tab scroll-to-target">
                                <span class="collection_bullet_icon">➢</span>
                                Pillows
                            </li>
                            <li data-tab="#tab-three" data-target=".tabbed-shop-section" class="tab-btn tab-btn1  list-dec bedlinen-tab scroll-to-target">
                                <span class="collection_bullet_icon">➢</span>
                                Bed linen
                            </li>
                            <li data-tab="#tab-four" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec accessories-tab scroll-to-target">
                                <span class="collection_bullet_icon">➢</span>
                                Sleep accessories
                            </li>
                            <!-- <li data-tab="#tab-five" class="tab-btn">Kitchen</li> -->
                        </ul>
                    </div>
                    
                    <!--======================hidden responsive categories======================-->
                    <div class="col-lg-2 col-md-3 col-sm-12 hidden-categories" style="display:none">
                        <div class="sec-title-four sec-title-four1">
                            <h2 class="categories">Categories</h2>
                        </div>
                        <!--Tab Buttons-->
                        <ul class="tab-buttons">
                            <li data-tab="#tab-one" data-target=".tabbed-shop-section" class="tab-btn active-btn tab-btn1 list-dec mattress-tab scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Mattress
                            </li>  
                            <ul class="list-style" style="display:none">
                            <li data-tab="#tab-five" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Duropedic
                            </li>  
                            <li data-tab="#tab-six" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Energise
                            </li>  
                            <li data-tab="#tab-seven" data-target=".tabbed-shop-section" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Natural Living
                            </li>  
                            <li data-tab="#tab-eight" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Essential
                            </li>  
                            <li data-tab="#tab-nine" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec list-dec1 font-sizing scroll-to-target">
                              <!--<span class="collection_bullet_icon">➢</span>-->
                                Bed In A Box
                            </li>  
                            </ul>
                            <li data-tab="#tab-two" data-target=".tabbed-shop-section" class="tab-btn tab-btn1  list-dec pillow-tab scroll-to-target">
                                <!--<span class="collection_bullet_icon">➢</span>-->
                                Pillows
                            </li>
                            <li data-tab="#tab-three" data-target=".tabbed-shop-section" class="tab-btn tab-btn1  list-dec bedlinen-tab scroll-to-target">
                                <!--<span class="collection_bullet_icon">➢</span>-->
                                Bed linen
                            </li>
                            <li data-tab="#tab-four" data-target=".tabbed-shop-section" class="tab-btn tab-btn1 list-dec accessories-tab scroll-to-target">
                                <!--<span class="collection_bullet_icon">➢</span>-->
                                Sleep accessories
                            </li>
                            <!-- <li data-tab="#tab-five" class="tab-btn">Kitchen</li> -->
                        </ul>
                    </div>

                    <!--Tabs Content-->

                    <div class="tabs-content">
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                            <!--Tab / Active Tab-->
                            <div class="shop-tab active-tab" id="tab-one">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div id="mattress-one" class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/mattress1.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/mattress1.webp" alt=""></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Edge Dual Sided Foam Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" 
                                                        href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a class="zoom-btn lightbox-image" href="images/mattress2.webp"-->
                                    <!--                    data-fancybox="gallery" data-caption="Caption Images 1"><img-->
                                    <!--                        src="images/mattress2.webp" alt="" /></a>-->
                                    <!--                <div class="item-sale-tag new">New</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>LiveIn 2 in 1 Dual Sided Roll Pack-->
                                    <!--                        Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 19.00 <span>$ 25.00</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress3.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress3.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Rise Spring Soft Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress4.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress4.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Up Right Orthopedic Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a href="images/mattress5.webp" data-fancybox="gallery"-->
                                    <!--                    data-caption="Caption Images 1"><img src="images/mattress5.webp"-->
                                    <!--                        alt="" /></a>-->
                                    <!--                <div class="item-sale-tag top">Top</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>LiveIn Memory Foam Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress6.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress6.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Back Magic Orthopedic Coir Mattress</a>
                                                    </h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress7.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress7.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Back Magic Pro Orthopedic Mattress</a>
                                                    </h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="#"href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a href="images/mattress8.webp" data-fancybox="gallery"-->
                                    <!--                    data-caption="Caption Images 1"><img src="images/mattress8.webp"-->
                                    <!--                        alt="" /></a>-->
                                    <!--                <div class="item-sale-tag top">Top</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>LiveIn Orthopedic Memory Foam-->
                                    <!--                        Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress9.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress9.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Rise Up Spring Mattress With Pillow
                                                            Top</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress10.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress10.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Boltt Plush Spring Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress11.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress11.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Balance Orthopedic Memory Foam
                                                            Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress12.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress12.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Strength Memory Foam Coir Orthopedic
                                                            Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress13.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress13.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Propel Pocket Spring Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress14.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress14.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Boltt Plus Spring Mattress with Euro
                                                            Top</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/mattress15.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/mattress15.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Tatva Natural Latex and Coir
                                                            Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--===========================Duropedic=============================-->
                            <div class="shop-tab" id="tab-five">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div id="mattress-one" class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/duropedic1.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/duropedic1.webp" alt=""></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Up Right Orthopedic Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" 
                                                        href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a class="zoom-btn lightbox-image" href="images/duropedic2.webp"-->
                                    <!--                    data-fancybox="gallery" data-caption="Caption Images 1"><img-->
                                    <!--                        src="images/duropedic2.webp" alt="" /></a>-->
                                    <!--                <div class="item-sale-tag new">New</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>LiveIn Orthopedic Memory Foam Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 19.00 <span>$ 25.00</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic3.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic3.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Back Magic Orthopedic Coir Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a href="images/duropedic4.webp" data-fancybox="gallery"-->
                                    <!--                    data-caption="Caption Images 1"><img src="images/duropedic4.webp"-->
                                    <!--                        alt="" /></a>-->
                                    <!--                <div class="item-sale-tag top">Top</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>Back Magic Pro Orthopedic Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic5.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic5.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Balance Orthopedic Memory Foam Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic6.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic6.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Strength Memory Foam Coir Orthopedic Mattress</a>
                                                    </h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic7.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic7.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Balance Plus Orthopedic Memory Foam Mattress With Euro Top</a>
                                                    </h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.com/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="#"href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic8.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic8.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Strength Plus Memory Foam Coir Orthopedic Mattress With Euro Top</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic9.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic9.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Posture Perfect Pocket Spring Orthopedic Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div></div></div>
                                    
                                    <!--===========================duropedic==========================-->
                                    
                                    <!--===========================Energise===========================-->
                                     <!--Tab / Active Tab-->
                                      <div class="shop-tab" id="tab-six">
                                <div class="tabbed-shop">
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div id="mattress-one" class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a class="zoom-btn lightbox-image" href="images/energise1.webp"-->
                                    <!--                    data-fancybox="gallery" data-caption="Caption Images 1"><img-->
                                    <!--                        src="images/energise1.webp" alt=""></a>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>Boltt Plush Spring Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" -->
                                    <!--                    href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/energise2.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/energise2.webp" alt="" /></a>
                                                    <div class="item-sale-tag new">New</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Boltt Plush Spring Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/energise3.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/energise3.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Boltt Plus Spring Mattress with Euro Top</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/energise4.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/energise4.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Propel Plus Pocket Spring Mattress With Euro Top</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/energise5.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/energise5.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Quboid Qube Cell Technology Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    
                                    <!--===========================Energise===========================-->
                                    
                                    <!--===========================Natural Living=====================-->
                                    <div class="shop-tab" id="tab-seven">
                                <div class="tabbed-shop">
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div id="mattress-one" class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a class="zoom-btn lightbox-image" href="images/natural-living1.webp"-->
                                    <!--                    data-fancybox="gallery" data-caption="Caption Images 1"><img-->
                                    <!--                        src="images/natural-living1.webp" alt=""></a>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>Avaasa 100% Natural Latex & Coir Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" -->
                                    <!--                    href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/natural-living2.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/natural-living2.webp" alt="" /></a>
                                                    <div class="item-sale-tag new">New</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Tatva Natural Latex and Coir Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/natural-living3.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/natural-living3.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Prana Pocket Spring Latex Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/natural-living4.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/natural-living4.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Kaya Chemical Free Natural Latex Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div></div></div>
                                    <!--===========================Natural Living=====================-->
                                    
                                    <!--===========================essential==========================-->
                                    
                                     <div class="shop-tab" id="tab-eight">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div id="mattress-one" class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/essential1.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/essential1.webp" alt=""></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Edge Dual Sided Foam Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" 
                                                        href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a class="zoom-btn lightbox-image" href="images/essential2.webp"-->
                                    <!--                    data-fancybox="gallery" data-caption="Caption Images 1"><img-->
                                    <!--                        src="images/essential2.webp" alt="" /></a>-->
                                    <!--                <div class="item-sale-tag new">New</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>LiveIn 2 in 1 Dual Sided Roll Pack Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 19.00 <span>$ 25.00</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a href="images/essential3.webp" data-fancybox="gallery"-->
                                    <!--                    data-caption="Caption Images 1"><img src="images/essential3.webp"-->
                                    <!--                        alt="" /></a>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>LiveIn Memory Foam Mattress</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 20.00</div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/essential4.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/essential4.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Rise Spring Soft Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">-->
                                    <!--    <div class="default-shop-item">-->
                                            <!--inner-box-->
                                    <!--        <div class="inner-box inner-box1">-->
                                                <!--image-box-->
                                    <!--            <figure class="image-box">-->
                                    <!--                <a href="images/duropedic8.webp" data-fancybox="gallery"-->
                                    <!--                    data-caption="Caption Images 1"><img src="images/duropedic8.webp"-->
                                    <!--                        alt="" /></a>-->
                                    <!--                <div class="item-sale-tag top">Top</div>-->
                                    <!--            </figure>-->

                                                <!--lower-content-->
                                    <!--            <div class="lower-content">-->
                                    <!--                <h3><a>Strength Plus Memory Foam Coir Orthopedic Mattress With Euro Top</a></h3>-->

                                    <!--                <div class="rating">-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                    <span class="fa fa-star"></span>-->
                                    <!--                </div>-->

                                    <!--                <div class="price">$ 25.99 <span>$ 35.99</span></div>-->
                                    <!--                <div class="links-box">-->
                                    <!--                    <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>-->
                                    <!--                    <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"-->
                                    <!--                        title="Image Caption Here"><i-->
                                    <!--                            class="fa-solid fa-square-phone-flip"></i></a>-->
                                    <!--                    <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"-->
                                    <!--                        ><i-->
                                    <!--                            class="fa-brands fa-square-whatsapp"></i></a>-->
                                    <!--                </div>-->
                                    <!--            </div>-->

                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/essential5.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/essential5.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Rise Up Spring Mattress With Pillow Top</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div></div></div>
                                    <!--===========================essential==========================-->
                                    
                                    <!--===========================bed in a box==========================-->
                                    
                                    <div class="shop-tab" id="tab-nine">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div id="mattress-one" class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/bed-In-A-Box1.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/bed-In-A-Box1.webp" alt=""></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>LiveIn 2 in 1 Dual Sided Roll Pack Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" 
                                                        href="https://api.whatsapp.com/send?phone=9003607919" target="_blank">
                                                            <i class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" href="images/bed-In-A-Box2.webp"
                                                        data-fancybox="gallery" data-caption="Caption Images 1"><img
                                                            src="images/bed-In-A-Box2.webp" alt=""></a>
                                                    <div class="item-sale-tag new">New</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>LiveIn Memory Foam Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank">
                                                            <i class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/bed-In-A-Box3.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/bed-In-A-Box3.webp" alt=""></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>LiveIn Orthopedic Memory Foam Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i  class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank">
                                                            <i class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a href="images/duropedic9.webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/duropedic9.webp" alt=""></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Posture Perfect Pocket Spring Orthopedic Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i  class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank">
                                                            <i class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!--===========================bed in a box==========================-->

                            <!--Tab-->
                            <div class="shop-tab" id="tab-two">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image"
                                                        href="images/pillows(1).webp"data-fancybox="gallery"
                                                        data-caption="Caption Images 1"><img src="images/pillows(1).webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Nidraa 100% Natural Latex Contoured
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
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image webp" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(2).webp"><img
                                                            src="images/pillows(2).webp" alt="" /></a>
                                                    <div class="item-sale-tag new">New</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Zeal Microfibre Antimicrobial
                                                            Pillow</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(3).webp"><img
                                                            src="images/pillows(3).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Nile Coffee Table</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(4).webp"><img
                                                            src="images/pillows(4).webp" alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Snuggle High Quality Fibre
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
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(5).webp"><img
                                                            src="images/pillows(5).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Life Contoured Dual Height
                                                            Antimicrobial Pillow</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(6).webp"><img
                                                            src="images/pillows(6).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Life Contoured Dual Height
                                                            Antimicrobial Pillow</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(7).webp"><img
                                                            src="images/pillows(7).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Walton Single SofaDuroflex Neck Pro
                                                            Orthopedic Support Pillow</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(8).webp"><img
                                                            src="images/pillows(8).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Life Contoured Dual Height
                                                            Antimicrobial Pillow</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(9).webp"><img
                                                            src="images/pillows(9).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Happy Soft Lightweight High
                                                            Quality Fibre Pillow</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(10).webp"><img src="images/pillows(10).webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Energy Cool Gel Antimicrobial
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
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(11).webp"><img src="images/pillows(11).webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Energy Cool Gel Antimicrobial
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
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(12).jpg"><img
                                                            src="images/pillows(12).jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                     <h3><a>Duroflex Life Contoured Dual Height Antimicrobial
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
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/pillows(13).jpeg"><img src="images/pillows(13).jpeg"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="#"><img
                                                            src="images/pillows(14).jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1" href="images/pillows(15).jpg"><img
                                                            src="images/pillows(15).jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!--Tab-->
                            <div class="shop-tab" id="tab-three">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet1.webp"><img src="images/bedsheet1.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Elegance Blue 100% Cotton Antibacterial
                                                            Bedsheet Set - Elements Classic</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet3.webp"><img src="images/bedsheet3.webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag new">New</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Tropical Blue 100% Cotton Antibacterial
                                                            Bedsheet Set - Splendour Classic</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet5.webp"><img src="images/bedsheet5.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Serene Pink 100% Cotton Super Soft
                                                            Antibacterial Bedsheet Set - Splendour Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(6).webp"><img
                                                            src="images/bedsheet(6).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Digital Imperia Grey 100% Cotton Super
                                                            Soft Antibacterial Bedsheet Set - Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(7).webp"><img
                                                            src="images/bedsheet(7).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Royale Grey 100% Cotton Super Soft
                                                            Antibacterial Bedsheet Set - Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(8).webp"><img
                                                            src="images/bedsheet(8).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Digital Gem Blue 100% Cotton Super Soft
                                                            Antibacterial Bedsheet Set - Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(9).webp"><img
                                                            src="images/bedsheet(9).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Meadow 100% Cotton Super Soft
                                                            Mercerised Antibacterial Bedsheet Set-Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(10).webp"><img
                                                            src="images/bedsheet(10).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Moderne Teal 100% Cotton Antibacterial
                                                            Bedsheet Set-Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(11).webp"><img
                                                            src="images/bedsheet(11).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Edenia Teal 100% Cotton Antibacterial
                                                            Bedsheet Set-Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(12).webp"><img
                                                            src="images/bedsheet(12).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Popsicle Blue 100% Cotton Antibacterial
                                                            Bedsheet Set-Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(13).webp"><img
                                                            src="images/bedsheet(13).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Sway Blue 100% Cotton Antibacterial
                                                            Bedsheet Set-Grandeur Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(14).webp"><img
                                                            src="images/bedsheet(14).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Sheen Blue 100% Cotton Super Soft
                                                            Antibacterial Bedsheet Set - Splendour Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet(15).webp"><img
                                                            src="images/bedsheet(15).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Interlace Pink 100% Cotton Super Soft
                                                            Antibacterial Bedsheet Set - Splendour Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet2..webp"><img src="images/bedsheet2..webp"
                                                            alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Tropical Brown 100% Cotton
                                                            Antibacterial Bedsheet Set - Splendour Classic</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/bedsheet4.webp"><img src="images/bedsheet4.webp"
                                                            alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Chintz Pink 100% Cotton Super Soft
                                                            Antibacterial Bedsheet Set - Splendour Prime</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <!--Tab-->
                            <div class="shop-tab" id="tab-four">
                                <div class="tabbed-shop">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories.jpg"><img
                                                            src="images/sleep-accessories.jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Lightweight Travel Friendly Slim
                                                            Mattress</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories2.webp"><img
                                                            src="images/sleep-accessories2.webp" alt="" /></a>
                                                    <div class="item-sale-tag new">New</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Antiviral Mattress Protector</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 19.00 <span>$ 25.00</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories5.jpg"><img
                                                            src="images/sleep-accessories5.jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Duroflex Snug Comforter</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 20.00</div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories1.webp"><img
                                                            src="images/sleep-accessories1.webp" alt="" /></a>
                                                    <div class="item-sale-tag top">Top</div>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <h3><a>Lightweight Travel Friendly Slim Mattress Varieties</a></h3>

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories(1).webp"><img
                                                            src="images/sleep-accessories(1).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                     <h3><a>Duroflex Snug Comforter Bed Linens</a></h3> 

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories(6).jpg"><img
                                                            src="images/sleep-accessories(6).jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories(7).webp"><img
                                                            src="images/sleep-accessories(7).webp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories(8).jpg"><img
                                                            src="images/sleep-accessories(8).jpg" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="https://api.whatsapp.com/send?phone=9003607919" target="_blank"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="#"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="#"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="#"
                                                            ><i
                                                                class="fa-brands fa-square-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none;">
                                        <div class="default-shop-item">
                                            <!--inner-box-->
                                            <div class="inner-box inner-box1">
                                                <!--image-box-->
                                                <figure class="image-box">
                                                    <a class="zoom-btn lightbox-image" data-fancybox="gallery"
                                                        data-caption="Caption Images 1"
                                                        href="images/sleep-accessories4.jp"><img
                                                            src="images/sleep-accessories4.jp" alt="" /></a>
                                                </figure>

                                                <!--lower-content-->
                                                <div class="lower-content">
                                                    <!-- <h3><a>Walton Single Sofa</a></h3> -->

                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>

                                                    <div class="price">$ 25.99 <span>$ 35.99</span></div>
                                                    <div class="links-box">
                                                        <a class="cart-btn" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Reach Us</a>
                                                        <a class="zoom-btn lightbox-image" href="tel:(+91)9003607919"
                                                            title="Image Caption Here"><i
                                                                class="fa-solid fa-square-phone-flip"></i></a>
                                                        <a class="add-to-favorite" href="#"
                                                            ><i
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
                </div>
            </div>
        </div>
    </section>




    <!--Services Section-->
    <section class="services-section" style="display:none;">
        <div class="auto-container">

            <div class="row clearfix">

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-1.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-improvement"></span></div>
                            <h3><a href="#">Texture Painting</a></h3>
                            <div class="text">How this mistaken idea pleasure and praising pain was born and will gives
                                you a completed expound rem eum fugiat voluptas.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-2.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-layers"></span></div>
                            <h3><a href="#">Wooden Flooring</a></h3>
                            <div class="text">Explain to you how ut can mistakens ideas off denouncing pleasures and
                                praising gives you mistaken idea denouncing pleasure.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-3.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-compass"></span></div>
                            <h3><a href="#">Interior Curtains</a></h3>
                            <div class="text">Denouncing pleasure and praisings pains was born and I will give you a
                                completed mistaken idea of denouncing pleasure account.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-4.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-tiles"></span></div>
                            <h3><a href="#">Tile &amp; Marble Work</a></h3>
                            <div class="text">Plesure and praisings pain was born and I will give you an completed and
                                mistakens idea off denouncing pleasure expound.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-5.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-two"></span></div>
                            <h3><a href="#">Furniture Work</a></h3>
                            <div class="text">We will give you mistaken idea of ut pleasure and praising pain ut was
                                born and I will gives you a complete great of the truth.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-6.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-bright-lightbulb"></span></div>
                            <h3><a href="#">Lighting Works</a></h3>
                            <div class="text">Expound that actualyl mistakens ideas of and praisings pains was born and
                                I will give you a complete account of human happiness.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-7.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-houses"></span></div>
                            <h3><a href="#">Curtains Road (Steel &amp; Wood)</a></h3>
                            <div class="text">Circumstances occur in which all toil and pain can procure him some great
                                pleasure to take trivial example which of us ever.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-8.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-parquet"></span></div>
                            <h3><a href="#">Walldesigning Works</a></h3>
                            <div class="text">The great explored off the truth, the masters builder off human happiness.
                                No one rejects dislikes, or avoids pleasure itself.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="default-services-block col-md-4 col-sm-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/resource/service-image-9.jpg" alt=""><a
                                href="#" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                        <div class="lower-content">
                            <div class="transparen-icon"><span class="flaticon-copy"></span></div>
                            <h3><a href="#">Artificial Grass Flooring</a></h3>
                            <div class="text">Expound that actualyl mistakens ideas of and praisings pains was born and
                                I will give you a complete account of human happiness.</div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">Read More</a></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--call-to-action-->
    <section class="call-to-action" style="background-image:url(images/product-bottom-banner.webp);">
        <div class="auto-container">
            <div class="row">
                <!-- <div class="text">Join with Decorators and</div> -->
                <h2>Make Your Home More Lovely!</h2>

                <a class="theme-btn btn-style-one" href="https://ganesanenterprises.simplemindz.in/Contact-Us#contact-section">Contact Us</a>
                <!--<a class="theme-btn btn-style-two" href="#">Shop Now</a>-->

            </div>
        </div>
    </section>





@endsection