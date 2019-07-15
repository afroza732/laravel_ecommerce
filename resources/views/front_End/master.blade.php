<!DOCTYPE HTML>
<head>
    <title>
        @yield('title','shop')
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{asset('public/frontend_assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('public/frontend_assets/css/menu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('public/frontend_assets/js/jquerymain.js')}}"></script>
    <script src="{{asset('public/frontend_assets/js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('public/frontend_assets/js/jquery-1.7.2.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('public/frontend_assets/js/nav.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend_assets/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend_assets/js/easing.js')}}"></script> 
    <script type="text/javascript" src="{{asset('public/frontend_assets/js/nav-hover.js')}}"></script>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'> 


    <script type="text/javascript">
$(document).ready(function ($) {
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems: '4', speed: 'fast', effect: 'fade'});
});
    </script>
    <style type="text/css">
        .paymentWrap {
            padding: 50px;
        }

        .paymentSubmit{
            padding: 5px 20px;
            font-size: 18px;
            background: yellowgreen;
            color: #F1F5F8;
        }
        .paymentWrap .paymentBtnGroup {
            max-width: 800px;
            margin: auto;
        }

        .paymentWrap .paymentBtnGroup .paymentMethod {
            padding: 40px;
            box-shadow: none;
            position: relative;
        }

        .paymentWrap .paymentBtnGroup .paymentMethod.active {
            outline: none !important;
        }

        .paymentWrap .paymentBtnGroup .paymentMethod.active .method {
            border-color: #4cd264;
            outline: none !important;
            box-shadow: 0px 3px 22px 0px #7b7b7b;
        }

        .paymentWrap .paymentBtnGroup .paymentMethod .method {
            position: absolute;
            right: 3px;
            top: 3px;
            bottom: 3px;
            left: 3px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            border: 2px solid transparent;
            transition: all 0.5s;
        }

        .paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQSyuSDvzvdvtHOWRDAFfg5-F1MW0wm9gaphrfi18WtovHsKT9"); 
        }
        .paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
            background-image: url("https://media.dhakatribune.com/uploads/2018/05/bkash-1526830658305.jpg");
        }


        .paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
            background-image: url("https://www.paypalobjects.com/webstatic/mktg/logo-center/PP_Acceptance_Marks_for_LogoCenter_266x142.png");
        }

        .paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq3iGmobCJbUzrDYl20mj-DbWrljjHKNXle8-Z4D_OEjcxt2Jk");
        }

        .paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
            border-color: #4cd264;
            outline: none !important;
        } 
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="{{URL::to('/')}}"><img src="{{asset('public/frontend_assets/images/logo.png')}}" alt="" /></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    {!! Form::open(array('url' =>'/search','method'=>'get')) !!}
                    <input type="text" name="search" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Search for Products';
                            }"><input type="submit" value="SEARCH">
                    {!! Form::close() !!}
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            @php
                            $contents = Cart::content();
                            @endphp
                            <span class="cart_title">Cart</span>
                            <span class="no_product">(empty)</span>
                        </a>
                    </div>
                </div>
                <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id) {
                    ?>
                    <div class="login">
                        <a href="{{URL::to('/customer-logout')}}">Logout</a>
                    </div>
                <?php } else {
                    ?>
                    <div class="login">
                        <a href="{{URL::to('/checkout')}}">login</a>
                    </div>
                <?php } ?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="menu">
            <ul id="dc_mega-menu-orange" class="dc_mm-orange">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('/product')}}">Products</a> </li>
                <li><a href="{{URL::to('/topbrands')}}">Top Brands</a></li>
                <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id) {
                    ?>
                    <li><a href="{{URL::to('/cart')}}">Cart</a></li>
                <?php } ?>
                <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id != null) {
                    ?>
                    <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                <?php } ?>  
                <?php
                $customer_id = Session::get('customer_id');
                $shipping_id = Session::get('shipping_id');
                if ($customer_id != null && $shipping_id != null) {
                    ?>
                    <li><a href="{{URL::to('/payment')}}">Payment</a></li>
                <?php } ?>  
                <li><a href="{{URL::to('/contact')}}">Contact</a> </li>
                <div class="clear"></div>
            </ul>
        </div>
        @yield('main_content')
        <div class="footer">
            <div class="wrapper">	
                <div class="section group">
                    <div class="col_1_of_4 span_1_of_4">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#"><span>Advanced Search</span></a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#"><span>Contact Us</span></a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h4>Why buy from us</h4>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="faq.html">Customer Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="contact.html"><span>Site Map</span></a></li>
                            <li><a href="preview.html"><span>Search Terms</span></a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h4>My account</h4>
                        <ul>
                            <li><a href="contact.html">Sign In</a></li>
                            <li><a href="index.html">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="faq.html">Help</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h4>Contact</h4>
                        <ul>
                            <li><span>+88-01786942732</span></li>
                            <li><span>+88-01813458552</span></li>
                        </ul>
                        <div class="social-icons">
                            <h4>Follow Us</h4>
                            <?php
                            $social = DB::table('social')->where('id', 1)->get();
                            ?>
                            <ul> 
                                @foreach($social as $value)
                                
                                <li class="facebook"><a href="{{$value->facebook}}" target="_blank"> </a></li>
                                <li class="twitter"><a href="{{$value->twiter}}" target="_blank"> </a></li>
                                <li class="googleplus"><a href="{{$value->google}}" target="_blank"> </a></li>
                                <li class="contact"><a href="{{$value->instragram}}" target="_blank"> </a></li>
                                @endforeach
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copy_right">
                    <p>Training with live project &amp; All rights Reseverd </p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        <link href="{{asset('public/frontend_assets/css/flexslider.css')}}" rel='stylesheet' type='text/css' />
        <script defer src="{{asset('public/frontend_assets/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script><!-- Bootstrap core JavaScript-->


</body>
</html>
