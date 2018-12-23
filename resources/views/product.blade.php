@extends('layouts.app')
@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h1>{{__('front.product_details')}}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{route('welcome')}}">{{__('front.home')}}</a></li>
                        <li><a href="{{route('shop.index')}}">{{__('front.shop')}}</a></li>
                        <li>{{$product->name}}</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Product Section Start -->
<div class="product-section section pt-90 pb-90 pt-lg-80 pb-lg-80 pt-md-70 pb-md-70 pt-sm-60 pb-sm-60 pt-xs-50 pb-xs-50">
    <div class="container">
        <div class="row">

            <div class="col-12">

                <div class="product-details mb-50">
                    <!-- Image -->
                    <div class="product-image left-thumbnail mb-xs-20">
                        <!-- Image -->
                        <div class="product-slider single-product-slider-syn">
                            <div class="item"><img src="{{asset('design')}}/images/product/product-1.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-2.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-3.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-4.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-5.jpg" alt=""></div>
                        </div>
                        <div class="product-slider single-product-thumb-slider-syn" data-vertical="true">
                            <div class="item"><img src="{{asset('design')}}/images/product/product-1.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-2.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-3.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-4.jpg" alt=""></div>
                            <div class="item"><img src="{{asset('design')}}/images/product/product-5.jpg" alt=""></div>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="product-content">
                        <div class="product-content-inner">
                            <div class="head">
                                <!-- Title-->
                                <div class="top">
                                    <h4 class="title">{{$product->name}}</h4>
                                </div>
                                <!-- Price & Ratting -->
                                <div class="bottom">
                                    <span class="price">{{$product->presentPrice()}}<span class="old">$75</span></span>
                                    <span class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="body">
                                <p>
                                    {{$product->description}}
                                </p>

                                <div class="quantity">
                                    <h4>Quantity:</h4>
                                    <div class="pro-qty"><input type="text" value="1"></div>
                                </div>

                                <!-- Product Action -->
                                <div class="product-action">
                                    <a href="#" class="cart"><span></span></a>
                                    <a href="#" class="compare"><span></span></a>
                                    <a href="#" class="wishlist"><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="product-details-tab-list nav">
                    <li><a class="active" data-toggle="tab" href="#description">Description</a></li>
                    <li><a data-toggle="tab" href="#specification">Details</a></li>
                    <li><a data-toggle="tab" href="#reviews">Reviews(15)</a></li>
                </ul>
                <div class="product-details-tab-content tab-content">
                    <div class="tab-pane active" id="description">
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="tab-pane" id="specification">
                        {{$product->details}}
                        {{--<ul class="specification">--}}
                            {{--<li>We provide the best Beard oil all over the world</li>--}}
                            {{--<li>We are the worldd best store for Beard Oil</li>--}}
                            {{--<li>You can buy our product without any hegitation.</li>--}}
                            {{--<li>We always consus about our product quality</li>--}}
                            {{--<li>Your can trust our product and this is our main goal.</li>--}}
                        {{--</ul>--}}
                    </div>
                    <div class="tab-pane" id="reviews">
                        <div class="review-list">
                            <div class="review">
                                <h4 class="name">Joe Flores <span>9 March 2018</span></h4>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam.</p>
                                </div>
                            </div>
                            <div class="review">
                                <h4 class="name">Amber Roberts <span>9 March 2018</span></h4>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="review-form">
                            <h3>Give your Review:</h3>
                            <form action="#">

                                <div class="ratting">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>

                                <div class="row row-10">
                                    <div class="col-md-6 col-12 mb-20"><input type="text" placeholder="Name"></div>
                                    <div class="col-md-6 col-12 mb-20"><input type="email" placeholder="Email"></div>
                                    <div class="col-12 mb-20"><textarea placeholder="Review"></textarea></div>
                                    <div class="col-12"><input type="submit" value="Submit"></div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

                <!-- Product Slider 4 Column Start-->
                <div class="row mt-50">

                    <div class="section-title left section col mb-40 mb-xs-30">
                        <h1>Related Product</h1>
                    </div>

                    <div class="product-slider product-slider-4 section">
                        @include('layouts.partials.might_like')
                    </div>
                </div><!-- Product Slider 4 Column End-->

            </div>

        </div>
    </div>
</div><!-- Product Section End -->

<!-- Service Section Start -->
<div class="service-section section pl-15 pr-15 pl-lg-30 pr-lg-30 pl-md-30 pr-md-30">
    <div class="service-container">
        <div class="row ml-0 mr-0">

            <div class="service col-xl-3 col-md-6 col-12">
                <div class="icon"></div>
                <div class="content">
                    <h3>Free home delivery</h3>
                    <p>Provide free home delivery for all product over $100</p>
                </div>
            </div>

            <div class="service col-xl-3 col-md-6 col-12">
                <div class="icon"></div>
                <div class="content">
                    <h3>Quality Products</h3>
                    <p>We ensure the product quality that is our main goal</p>
                </div>
            </div>

            <div class="service col-xl-3 col-md-6 col-12">
                <div class="icon"></div>
                <div class="content">
                    <h3>3 Days Return</h3>
                    <p>Return product within 3 days for any product you buy</p>
                </div>
            </div>

            <div class="service col-xl-3 col-md-6 col-12">
                <div class="icon"></div>
                <div class="content">
                    <h3>Online Support</h3>
                    <p>We ensure the product quality that you can trust easily</p>
                </div>
            </div>

        </div>
    </div>
</div><!-- Service Section End -->

@endsection