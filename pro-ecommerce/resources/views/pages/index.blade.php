@extends('userlayouts.app')
@section('content')

<div id="page-content">
    <!--Image Banners-->
    {{-- <div class="section imgBanners">
        <div class="imgBnrOuter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="img-bnr">
                            <div class="inner center">
                                <a href="#">
                                       <img data-src="{{ asset('frontend/images/collection/modern1.jpg') }}" src="{{ asset('frontend/images/collection/modern1.jpg') }}"
                                        alt="Cap" title="Cap" class="blur-up lazyload" />
                                    <span class="ttl">Cap</span>
                                </a>
                            </div>
                        </div>
                        <div class="img-bnr">
                            <div class="inner center">
                                <a href="#">
                                       <img data-src="{{ asset('frontend/images/collection/modern2.jpg') }}" src="{{ asset('frontend/images/collection/modern2.jpg') }}"
                                        alt="Sweaters" title="Sweaters" class="blur-up lazyload" />
                                    <span class="ttl">Sweaters</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{ asset('frontend/images/collection/modern3.jpg') }}" src="{{ asset('frontend/images/collection/modern3.jpg') }}"
                                alt="Tops" title="Tops" class="blur-up lazyload" />
                                <span class="ttl">Tops</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{ asset('frontend/images/collection/modern4.jpg') }}" src="{{ asset('frontend/images/collection/modern4.jpg') }}"
                                 alt="Jeans" title="Jeans" class="blur-up lazyload" />
                                <span class="ttl">Jeans</span>
                            </a>
                        </div>
                        <div class="inner center">
                            <a href="#">
                                <img data-src="{{ asset('frontend/images/collection/modern5.jpg') }}" src="{{ asset('frontend/images/collection/modern5.jpg') }}"
                                alt="Shoes" title="Shoes" class="blur-up lazyload" />
                                <span class="ttl">Shoes</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End Image Banners-->

    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section">
        <div class="home-slideshow">
            @foreach ($data['slides'] as $slide)
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="{{url('/storage/images/slides/'.$slide->slider_img)}}" src="{{url('/storage/images/slides/'.$slide->slider_img)}}" alt="{{$slide->description}}" title="{{$slide->description}}" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                <div class="wrap-caption right">
                                    <h2 class="h1 mega-title slideshow__title">{{$slide->title}}</h2>
                                    <span class="mega-subtitle slideshow__subtitle">{{$slide->description}}</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
    <!--End Home slider-->

     <!--Product Fearure-->
     <div class="container">
        <div class="prFeatures">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                    <img src="{{ asset('frontend/images/credit-card.png') }}" alt="Safe Payment" title="Safe Payment" />
                    <div class="details"><h3>Safe Payment</h3>Pay with the world's most payment methods.</div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                    <img src="{{ asset('frontend/images/shield.png') }}" alt="Confidence" title="Confidence" />
                    <div class="details"><h3>Confidence</h3>Protection covers your purchase and personal data.</div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                    <img src="{{ asset('frontend/images/worldwide.png') }}" alt="Worldwide Delivery" title="Worldwide Delivery" />
                    <div class="details"><h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature">
                    <img src="{{ asset('frontend/images/phone-call.png') }}" alt="Hotline" title="Hotline" />
                    <div class="details"><h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                </div>
            </div>
        </div>
    </div>
    <!--End Product Fearure-->

    <!--Collection Tab slider-->
    <div class="tab-slider-product section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2"><strong>Produits en vedette</strong></h2>
                        <p>Parcourez la grande variété de nos produits.</p>
                    </div>
                    <div class="tabs-listing">
                        <ul class="tabs clearfix">
                            <li class="active" rel="tab1">Femmes</li>
                            <li rel="tab2">Hommes</li>
                            <li rel="tab3">Accessoires</li>
                        </ul>
                        <div class="tab_container">
                            <div id="tab1" class="tab_content grid-products">
                                <a href="#" class="btn btn-sm" style="margin-left: 15px; margin-bottom:5px"><strong>Voir Tout</strong></a>
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image1.jpg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image1-1.jpg" src="frontend/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- countdown start -->
                                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                            <!-- countdown end -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Edna Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$500.00</span>
                                                <span class="price">$600.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant1.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant2.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant4.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant5.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant6.jpg" alt="image" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image2.jpg" src="frontend/images/product-images/product-image2.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image2-1.jpg" src="frontend/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Elastic Waist Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$748.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant2-1.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant2-2.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant2-3.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant2-4.jpg" alt="image" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image3.jpg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image3-1.jpg" src="frontend/images/product-images/product-image3-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">3/4 Sleeve Kimono Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-1.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-2.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-3.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-4.jpg" alt="image" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image4.jpg" src="frontend/images/product-images/product-image4.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image4-1.jpg" src="frontend/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Cape Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$900.00</span>
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant4-1.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant4-2.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant4-3.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant4-4.jpg" alt="image" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image5.jpg" src="frontend/images/product-images/product-image5.jpg" alt="image" title="product" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image5-1.jpg" src="frontend/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Paper Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-1.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-2.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-3.jpg" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="frontend/images/product-images/variant3-4.jpg" alt="image" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content grid-products">
                                <a href="#" class="btn btn-sm" style="margin-left: 15px; margin-bottom:5px"><strong>Voir Tout</strong></a>
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image6.jpg" src="frontend/images/product-images/product-image6.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image6-1.jpg" src="frontend/images/product-images/product-image6-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Zipper Jacket</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image7.jpg" src="frontend/images/product-images/product-image7.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image7-1.jpg" src="frontend/images/product-images/product-image7-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Zipper Jacket</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$748.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image8.jpg" src="frontend/images/product-images/product-image8.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image8-1.jpg" src="frontend/images/product-images/product-image8-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>

                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Workers Shirt Jacket</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$238.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image9.jpg" src="frontend/images/product-images/product-image9.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image9-1.jpg" src="frontend/images/product-images/product-image9-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Watercolor Sport Jacket in Brown/Blue</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$348.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image10.jpg" src="frontend/images/product-images/product-image10.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image10-1.jpg" src="frontend/images/product-images/product-image10-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Washed Wool Blazer</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$1,078.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab_content grid-products">
                                <a href="#" class="btn btn-sm" style="margin-left: 15px; margin-bottom:5px"><strong>Voir Tout</strong></a>
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image11.jpg" src="frontend/images/product-images/product-image11.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image11-1.jpg" src="frontend/images/product-images/product-image11-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Azur Bracelet in Blue Azurite</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$168.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image12.jpg" src="frontend/images/product-images/product-image12.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image12-1.jpg" src="frontend/images/product-images/product-image12-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Bi-Goutte Earrings</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$58.00</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image13.jpg" src="frontend/images/product-images/product-image13.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image13-1.jpg" src="frontend/images/product-images/product-image13-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>

                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Ashton Necklace</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$228.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image14.jpg" src="frontend/images/product-images/product-image14.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image14-1.jpg" src="frontend/images/product-images/product-image14-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Ara Ring</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$198.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                    <div class="col-12 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="short-description.html">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image15.jpg" src="frontend/images/product-images/product-image15.jpg" alt="image" title="product">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image15-1.jpg" src="frontend/images/product-images/product-image15-1.jpg" alt="image" title="product">
                                                <!-- End hover image -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                            </form>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="short-description.html">Ara Ring</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$198.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                            </div>
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Collection Tab slider-->

    <!--Deals Of The Day-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2"><strong>Deals du Jour</strong></h2>
                        <p>Nos produits en soldes de la journée.</p>
                    </div>
                    <a href="#" class="btn btn-sm" style="margin-left: 15px; margin-bottom:5px"><strong>Voir Tout</strong></a>
                    <div class="productSlider grid-products">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image1.jpg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image1-1.jpg" src="frontend/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- countdown start -->
                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                <!-- countdown end -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded navy" rel="frontend/images/product-images/product-image-stw1.jpg"></li>
                                    <li class="swatch small rounded green" rel="frontend/images/product-images/product-image-stw1-1.jpg"></li>
                                    <li class="swatch small rounded gray" rel="frontend/images/product-images/product-image-stw1-2.jpg"></li>
                                    <li class="swatch small rounded aqua" rel="frontend/images/product-images/product-image-stw1-3.jpg"></li>
                                    <li class="swatch small rounded orange" rel="frontend/images/product-images/product-image-stw1-4.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image2.jpg" src="frontend/images/product-images/product-image2.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image2-1.jpg" src="frontend/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded black" rel="frontend/images/product-images/product-image2.jpg"></li>
                                    <li class="swatch small rounded navy" rel="frontend/images/product-images/product-image-swt2.jpg"></li>
                                    <li class="swatch small rounded purple" rel="frontend/images/product-images/product-image-swt2-1.jpg"></li>
                                    <li class="swatch small rounded teal" rel="frontend/images/product-images/product-image-swt2-2.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                               <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image3.jpg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image3-1.jpg" src="frontend/images/product-images/product-image3-1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl pr-label2">Hot</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded gray" rel="frontend/images/product-images/product-image16.jpg"></li>
                                    <li class="swatch small rounded red" rel="frontend/images/product-images/product-image5.jpg"></li>
                                    <li class="swatch small rounded orange" rel="frontend/images/product-images/product-image5-1.jpg"></li>
                                    <li class="swatch small rounded yellow" rel="frontend/images/product-images/product-image17.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image4.jpg" src="frontend/images/product-images/product-image4.jpg" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image4-1.jpg" src="frontend/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded black" rel="frontend/images/product-images/cape-dress-2.jpg"></li>
                                    <li class="swatch small rounded maroon" rel="frontend/images/product-images/product-image4-1.jpg"></li>
                                    <li class="swatch small rounded navy" rel="frontend/images/product-images/product-image2.jpg"></li>
                                    <li class="swatch small rounded darkgreen" rel="frontend/images/product-images/product-image2-1.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image5.jpg" src="frontend/images/product-images/product-image5.jpg" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image5-1.jpg" src="frontend/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image5.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded gray" rel="frontend/images/product-images/product-image16.jpg"></li>
                                    <li class="swatch small rounded red" rel="frontend/images/product-images/product-image5.jpg"></li>
                                    <li class="swatch small rounded orange" rel="frontend/images/product-images/product-image5-1.jpg"></li>
                                    <li class="swatch small rounded yellow" rel="frontend/images/product-images/product-image17.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Deals Of The Day-->

    <!--Weekly Bestseller-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2"><strong>Meilleures Ventes</strong></h2>
                        <p>Nos produits les plus populaires en fonction des ventes par semaine.</p>
                    </div>
                    <a href="#" class="btn btn-sm" style="margin-left: 15px; margin-bottom:5px"><strong>Voir Tout</strong></a>
                    <div class="productSlider grid-products">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image1.jpg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image1-1.jpg" src="frontend/images/product-images/product-image1-1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- countdown start -->
                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                <!-- countdown end -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Edna Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$500.00</span>
                                    <span class="price">$600.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded navy" rel="frontend/images/product-images/product-image-stw1.jpg"></li>
                                    <li class="swatch small rounded green" rel="frontend/images/product-images/product-image-stw1-1.jpg"></li>
                                    <li class="swatch small rounded gray" rel="frontend/images/product-images/product-image-stw1-2.jpg"></li>
                                    <li class="swatch small rounded aqua" rel="frontend/images/product-images/product-image-stw1-3.jpg"></li>
                                    <li class="swatch small rounded orange" rel="frontend/images/product-images/product-image-stw1-4.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image2.jpg" src="frontend/images/product-images/product-image2.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image2-1.jpg" src="frontend/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image1.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Elastic Waist Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded black" rel="frontend/images/product-images/product-image2.jpg"></li>
                                    <li class="swatch small rounded navy" rel="frontend/images/product-images/product-image-swt2.jpg"></li>
                                    <li class="swatch small rounded purple" rel="frontend/images/product-images/product-image-swt2-1.jpg"></li>
                                    <li class="swatch small rounded teal" rel="frontend/images/product-images/product-image-swt2-2.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                               <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image3.jpg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image3-1.jpg" src="frontend/images/product-images/product-image3-1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl pr-label2">Hot</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">3/4 Sleeve Kimono Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded gray" rel="frontend/images/product-images/product-image16.jpg"></li>
                                    <li class="swatch small rounded red" rel="frontend/images/product-images/product-image5.jpg"></li>
                                    <li class="swatch small rounded orange" rel="frontend/images/product-images/product-image5-1.jpg"></li>
                                    <li class="swatch small rounded yellow" rel="frontend/images/product-images/product-image17.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image4.jpg" src="frontend/images/product-images/product-image4.jpg" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image4-1.jpg" src="frontend/images/product-images/product-image4-1.jpg" alt="image" title="product" />
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image3.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                    <!-- product label -->
                                    <div class="product-labels rounded"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Cape Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded black" rel="frontend/images/product-images/cape-dress-2.jpg"></li>
                                    <li class="swatch small rounded maroon" rel="frontend/images/product-images/product-image4-1.jpg"></li>
                                    <li class="swatch small rounded navy" rel="frontend/images/product-images/product-image2.jpg"></li>
                                    <li class="swatch small rounded darkgreen" rel="frontend/images/product-images/product-image2-1.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="frontend/images/product-images/product-image5.jpg" src="frontend/images/product-images/product-image5.jpg" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="frontend/images/product-images/product-image5-1.jpg" src="frontend/images/product-images/product-image5-1.jpg" alt="image" title="product" />
                                    <!-- End hover image -->
                                    <!-- Variant Image-->
                                    <img class="grid-view-item__image hover variantImg" src="frontend/images/product-images/product-image5.jpg" alt="image" title="product">
                                    <!-- Variant Image-->
                                </a>
                                <!-- end product image -->

                                <!-- Start product button -->
                                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                </form>
                                <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                        <i class="icon anm anm-search-plus-r"></i>
                                    </a>
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">Paper Dress</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                                <!-- Color Variant -->
                                <ul class="swatches">
                                    <li class="swatch small rounded gray" rel="frontend/images/product-images/product-image16.jpg"></li>
                                    <li class="swatch small rounded red" rel="frontend/images/product-images/product-image5.jpg"></li>
                                    <li class="swatch small rounded orange" rel="frontend/images/product-images/product-image5-1.jpg"></li>
                                    <li class="swatch small rounded yellow" rel="frontend/images/product-images/product-image17.jpg"></li>
                                </ul>
                                <!-- End Variant -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Weekly Bestseller-->

    {{-- <!--Jewellery Hot picks-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2 heading-font"><strong>Nos Bijoux</strong></h2>
                        <p>Nos bijoux sont la prochaine meilleure chose à aimer</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-sm" style="margin-left: 15px; margin-bottom:5px"><strong>Tout Afficher</strong></a>
            <div class="productSlider-style2 grid-products">
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products1.jpg" src="frontend/images/jewellery-products/jewellery-products1.jpg" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products1-1.jpg" src="frontend/images/jewellery-products/jewellery-products1-1.jpg" alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Silver Designer Pendant Set</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$15.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products2.jpg" src="frontend/images/jewellery-products/jewellery-products2.jpg" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products2-1.jpg" src="frontend/images/jewellery-products/jewellery-products2-1.jpg" alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Cardinal Necklace Set for Women</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$70.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                       <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products3.jpg" src="frontend/images/jewellery-products/jewellery-products3.jpg" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products3-1.jpg" src="frontend/images/jewellery-products/jewellery-products3-1.jpg" alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Posh Diamond Bracelet</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$50.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products4.jpg" src="frontend/images/jewellery-products/jewellery-products4.jpg" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products4-1.jpg" src="frontend/images/jewellery-products/jewellery-products4-1.jpg" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Posh Diamond Bracelet</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="old-price">$900.00</span>
                            <span class="price">$788.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products5.jpg" src="frontend/images/jewellery-products/jewellery-products5.jpg" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products5-1.jpg" src="frontend/images/jewellery-products/jewellery-products5-1.jpg" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Eye-Catchy Fancy Bracelet</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$55.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products6.jpg" src="frontend/images/jewellery-products/jewellery-products6.jpg" alt="image" title="product" />
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="frontend/images/jewellery-products/jewellery-products6-1.jpg" src="frontend/images/jewellery-products/jewellery-products6-1.jpg" alt="image" title="product" />
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!-- Start product button -->
                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Tibetan Stone Beads Necklace Set</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">$55.00</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
            </div>
        </div>
    </div>
   <!--End Jewellery Hot picks--> --}}

   <!--Collection Box slider-->
   <div class="container">
    <div class="collection-box section">
        <div class="container-fluid">
            <div class="collection-grid">
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="frontend/images/collection/fashion.jpg" src="frontend/images/collection/fashion.jpg" alt="Fashion" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Fashion</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img class="blur-up lazyload" data-src="frontend/images/collection/cosmetic.jpg" src="frontend/images/collection/cosmetic.jpg" alt="Cosmetic"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item blur-up lazyloaded">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="frontend/images/collection/bag.jpg" src="frontend/images/collection/bag.jpg" alt="Bag" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Bag</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="frontend/images/collection/accessories.jpg" src="frontend/images/collection/accessories.jpg" alt="Accessories" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="frontend/images/collection/shoes.jpg" src="frontend/images/collection/shoes.jpg" alt="Shoes" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                            </div>
                        </a>
                    </div>
                    <div class="collection-grid-item">
                        <a href="collection-page.html" class="collection-grid-item__link">
                            <img data-src="frontend/images/collection/jewellry.jpg" src="frontend/images/collection/jewellry.jpg" alt="Jewellry" class="blur-up lazyload"/>
                            <div class="collection-grid-item__title-wrapper">
                                <h3 class="collection-grid-item__title btn btn--secondary no-border">Jewellry</h3>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>
    </div>
<!--End Collection Box slider-->

</div>

@endsection
