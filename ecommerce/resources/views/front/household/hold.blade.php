@extends('front.master');

@section('title')
   House hold
@endsection
@section('body')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="{{route('care')}}"><img class="first-slide" src="{{asset('/')}}big-store/images/ba2.jpg" alt="First slide"></a>

            </div>
            <div class="item">
                <a href="{{route('care')}}"><img class="second-slide " src="{{asset('/')}}big-store/images/ba.jpg" alt="Second slide"></a>

            </div>
            <div class="item">
                <a href="{{route('hold')}}"> <img class="third-slide " src="{{asset('/')}}big-store/images/ba1.jpg" alt="Third slide"></a>

            </div>
        </div>

    </div><!-- /.carousel -->

    <!--content-->
    <div class="kic-top ">
        <div class="container ">
            <div class="kic ">
                <h3>Popular Categories</h3>

            </div>
            <div class="col-md-4 kic-top1">
                <a href="{{route('single')}}">
                    <img src="{{asset('/')}}big-store/images/ki6.jpg" class="img-responsive" alt="">
                </a>
                <h6>Clips</h6>
                <p>Nam libero tempore</p>
            </div>
            <div class="col-md-4 kic-top1">
                <a href="{{route('single')}}">
                    <img src="{{asset('/')}}big-store/images/ki7.jpg" class="img-responsive" alt="">
                </a>
                <h6>Cleaning Wear</h6>
                <p>Nam libero tempore</p>
            </div>
            <div class="col-md-4 kic-top1">
                <a href="{{route('single')}}">
                    <img src="{{asset('/')}}big-store/images/ki8.jpg" class="img-responsive" alt="">
                </a>
                <h6>Toothbrush</h6>
                <p>Nam libero tempore</p>
            </div>
        </div>
    </div>

    <!--content-->
    <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Products</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l agileinf">
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of48.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Cat Food</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="48" data-name="Cat Food" data-summary="summary 48" data-price="6.00" data-quantity="1" data-image="{{asset('/')}}big-store/images/of48.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of49.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Safety Pins</a>(100 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="49" data-name="Safety Pins" data-summary="summary 49" data-price="4.50" data-quantity="1" data-image="{{asset('/')}}big-store/images/of49.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of50.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Agarbatti</a>(200 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="50" data-name="Agarbatti" data-summary="summary 50" data-price="3.50" data-quantity="1" data-image="{{asset('/')}}big-store/images/of50.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of51.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Candle Set </a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="51" data-name="Candle Set" data-summary="summary 51" data-price="0.80" data-quantity="1" data-image="{{asset('/')}}big-store/images/of51.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of52.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Dust Bin</a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="52" data-name="Dust Bin" data-summary="summary 52" data-price="6.00" data-quantity="1" data-image="{{asset('/')}}big-store/images/of52.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of53.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}"> Hanger</a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="53" data-name="Hanger" data-summary="summary 53" data-price="4.50" data-quantity="1" data-image="{{asset('/')}}big-store/images/of53.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of54.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}"> Pet Bowl</a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="54" data-name="Pet Bowl" data-summary="summary 54" data-price="3.50" data-quantity="1" data-image="{{asset('/')}}big-store/images/of54.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of55.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Tailum</a>(500 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="55" data-name="Tailum" data-summary="summary 55" data-price="0.80" data-quantity="1" data-image="{{asset('/')}}big-store/images/of55.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of56.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}"> Container</a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="56" data-name="Container" data-summary="summary 56" data-price="6.00" data-quantity="1" data-image="{{asset('/')}}big-store/images/of56.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of57.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Scrub Sponge</a>(100 g)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="57" data-name="Scrub Sponge" data-summary="summary 57" data-price="4.50" data-quantity="1" data-image="{{asset('/')}}big-store/images/of57.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of58.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}">Reindeer </a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="58" data-name="Xmas Reindeer" data-summary="summary 58" data-price="3.50" data-quantity="1" data-image="{{asset('/')}}big-store/images/of58.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pro-1">
                    <div class="col-m">
                        <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                            <img src="{{asset('/')}}big-store/images/of59.png" class="img-responsive" alt="">
                        </a>
                        <div class="mid-1">
                            <div class="women">
                                <h6><a href="{{route('single')}}"> Cleaner</a>(1 pc)</h6>
                            </div>
                            <div class="mid-2">
                                <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="59" data-name="Cleaner" data-summary="summary 59" data-price="0.80" data-quantity="1" data-image="{{asset('/')}}big-store/images/of59.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection