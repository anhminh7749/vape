@extends('layout')
@Section('content')
<!-- mens -->
<div class="men-wear">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="filter-price">
                <h3>BỘ LỌC NÂNG CAO</h3>
                <ul class="dropdown-menu6">
                    <li>
                        <div id="slider-range"></div>
                        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                    </li>
                </ul>
                <!---->
                <script type='text/javascript'>
                //<![CDATA[ 
                $(window).load(function() {
                    $("#slider-range").slider({
                        range: true,
                        min: 0,
                        max: 9000,
                        values: [1000, 7000],
                        slide: function(event, ui) {
                            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        }
                    });
                    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range")
                        .slider("values", 1));

                }); //]]>  
                </script>
                <script type="text/javascript" src="js/jquery-ui.js"></script>
                <!---->
            </div>

            <div class="community-poll">
			<div class="checkbox-block">
                    <span>Loại</span>
                    <ul class="filter_checbox">
                        <li class="item1">
                            <input class="checkbox-effect checkbox-effect-1" id="get-up-1" type="checkbox"
                                value="get-up-1" name="get-up-1" checked/>
                            <label for="get-up-1">Tất cả</label>
                        </li>
                        <li class="item2">
                            <input class="checkbox-effect checkbox-effect-1" id="make-bed-1" type="checkbox"
                                value="make-bed-1" name="make-bed-1" />
                            <label for="make-bed-1">Thuốc lá điện tử</label>
                        </li>
						<li class="item2">
                            <input class="checkbox-effect checkbox-effect-1" id="make-bed-1" type="checkbox"
                                value="make-bed-1" name="make-bed-1" />
                            <label for="make-bed-1">Tinh dầu vape</label>
                        </li>
						<li class="item2">
                            <input class="checkbox-effect checkbox-effect-1" id="make-bed-1" type="checkbox"
                                value="make-bed-1" name="make-bed-1" />
                            <label for="make-bed-1">Phụ kiện</label>
                        </li>
                    </ul>
                </div>
                <div class="checkbox-block">
                    <span>Thương hiệu</span>
                    <ul class="filter_checbox">
                        <li class="item1">
                            <input class="checkbox-effect checkbox-effect-1" id="get-up-1" type="checkbox"
                                value="get-up-1" name="get-up-1" />
                            <label for="get-up-1">Get Up</label>
                        </li>
                        <li class="item2">
                            <input class="checkbox-effect checkbox-effect-1" id="make-bed-1" type="checkbox"
                                value="make-bed-1" name="make-bed-1" />
                            <label for="make-bed-1">Make a Bed</label>
                        </li>

                    </ul>
                </div>
				<div class="checkbox-block">
                    <span>Xuất xứ</span>
                    <ul class="filter_checbox">
                        <li class="item1">
                            <input class="checkbox-effect checkbox-effect-1" id="get-up-1" type="checkbox"
                                value="get-up-1" name="get-up-1" />
                            <label for="get-up-1">Get Up</label>
                        </li>
                        <li class="item2">
                            <input class="checkbox-effect checkbox-effect-1" id="make-bed-1" type="checkbox"
                                value="make-bed-1" name="make-bed-1" />
                            <label for="make-bed-1">Make a Bed</label>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            <h5>Product Compare(0)</h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>Sort By</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">Default</option>
                        <option value="null">Name(A - Z)</option>
                        <option value="null">Name(Z - A)</option>
                        <option value="null">Price(High - Low)</option>
                        <option value="null">Price(Low - High)</option>
                        <option value="null">Model(A - Z)</option>
                        <option value="null">Model(Z - A)</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Showing</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">7</option>
                        <option value="null">14</option>
                        <option value="null">28</option>
                        <option value="null">35</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="men-wear-top">
                <script src="js/responsiveslides.min.js"></script>
                <script>
                // You can also use "$(window).load(function() {"
                $(function() {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function() {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function() {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
                </script>

                <div class="clearfix"></div>
            </div>

            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="images/ep2.png" alt="" class="pro-image-front">
                        <img src="images/ep2.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Watches</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="images/a2.png" alt="" class="pro-image-front">
                        <img src="images/a2.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Blazers</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="images/mw2.png" alt="" class="pro-image-front">
                        <img src="images/mw2.png" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Shirts</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">$45.99</span>
                            <del>$69.71</del>
                        </div>
                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <div class="pagination-grid text-right">
            <ul class="pagination paging">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //mens -->
<!-- //product-nav -->
<div class="coupons">
    <div class="container">
        <div class="coupons-grids text-center">
            <div class="col-md-3 coupons-gd">
                <h3>Buy your product in a simple way</h3>
            </div>
            <div class="col-md-3 coupons-gd">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <h4>LOGIN TO YOUR ACCOUNT</h4>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                    sit amet, consectetur.</p>
            </div>
            <div class="col-md-3 coupons-gd">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <h4>SELECT YOUR ITEM</h4>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                    sit amet, consectetur.</p>
            </div>
            <div class="col-md-3 coupons-gd">
                <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                <h4>MAKE PAYMENT</h4>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                    sit amet, consectetur.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endSection