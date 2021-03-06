@foreach($products as $product)
    <product
            inline-template
            v-cloak
            :product="{{$product}}"
            to-cart-route="{{route('cart.store')}}"
            remove-from-cart-route="{{route('cart.remove')}}"
            to-wishlist-route="{{route('wishlist.store')}}"
            remove-from-wishlist-route="{{route('wishlist.remove')}}"
    >
        <!-- Product Item Start -->
        <div class="col-xl-4 col-sm-6 col-12 mb-30">
            <div class="product-item">
                <!-- Image -->
                <div class="product-image">
                    <!-- Image -->
                    <a href="product-details-variable.html" class="image"><img src="{{$product->image}}" alt=""></a>
                @authAndVerified
                    <!-- Product Action -->
                    <div class="product-action">
                            <a
                                    :class="inCart ? 'btn btn-primary' : 'btn btn-default'"
                                    @click.prevent="storeUpdate('cart')">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <a
                                    :class="inWishlist ? 'btn btn-danger' : 'btn btn-default'"
                                    @click.prevent="storeUpdate('wishlist')">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="quickview"><span></span></a>
                        </div>
                    @endauthAndVerified
                </div>
                <!-- Content -->
                <div class="product-content">
                    <div class="head">
                        <!-- Title-->
                        <div class="top">
                            <h4 class="title"><a href="{{route('shop.show', $product->slug)}}">{{$product->name}}</a></h4>
                        </div>
                        <!-- Price & Ratting -->
                        <div class="bottom">
                            <span class="price">{{presentPrice($product->price)}} <span class="old">$65</span></span>
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
                        <!-- Product Action -->
                        <div class="product-action">
                            <a @click.prevent="toCart()" class="cart"><span></span></a>
                            <a href="#" class="wishlist"><span></span></a>
                            <a href="#" class="quickview"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Item End -->
    </product>
@endforeach