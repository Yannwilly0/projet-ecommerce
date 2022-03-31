@extends('userlayouts.app')
@section('content')

<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center mb-0">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Collections</h1></div>
          </div>
    </div>
    <!--End Page Title-->
    <div class="bredcrumbWrap">
        <div class="container breadcrumbs">
            <a href="{{url('/')}}" title="Back to the home page">Accueil</a><span aria-hidden="true">›</span><span>Collections</span>
        </div>
    </div>
    <div class="container collection-box">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page1.jpg" src="frontend/images/collection/collection-page1.jpg" alt="image" title="">
                        <span class="title"><span>Bags</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="{{ route('collection.items')}}">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page2.jpg" src="frontend/images/collection/collection-page2.jpg" alt="image" title="">
                        <span class="title"><span>Women</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page3.jpg" src="frontend/images/collection/collection-page3.jpg" alt="image" title="">
                        <span class="title"><span>Women Shoes</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page4.jpg" src="frontend/images/collection/collection-page4.jpg" alt="image" title="">
                        <span class="title"><span>Men</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page5.jpg" src="frontend/images/collection/collection-page5.jpg" alt="image" title="">
                        <span class="title"><span>Kids</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page6.jpg" src="frontend/images/collection/collection-page6.jpg" alt="image" title="">
                        <span class="title"><span>Accessories</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page7.jpg" src="frontend/images/collection/collection-page7.jpg" alt="image" title="">
                        <span class="title"><span>cosmetics</span></span>
                    </a>
                </div>
               </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="colletion-item">
                    <a href="#">
                        <img class="blur-up lazyload" data-src="frontend/images/collection/collection-page8.jpg" src="frontend/images/collection/collection-page8.jpg" alt="image" title="">
                        <span class="title"><span>Jewellery</span></span>
                    </a>
                </div>
               </div>
        </div>
    </div>

</div>

@endsection
