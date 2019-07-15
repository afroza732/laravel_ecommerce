@extends('front_End.master')
@section('main_content')
<div class="header_bottom">
    <div class="header_bottom_left"> 
        <div class="section group">
            <?php
            $product = DB::table('product')->where('manufacturer_id', 5)->limit(1)->get();
            ?>
            @foreach($product as $value)         
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{$value->product_image}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>{{$value->product_model}}</h2>
                    <p> price- {{$value->product_price}}</p>
                    <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}">Add to cart</a></span></div>
                </div>
            </div>
            @endforeach
            <?php
            $product = DB::table('product')->where('manufacturer_id', 10)->limit(1)->get();
            ?>
            @foreach($product as $value)         
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{$value->product_image}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>{{$value->product_model}}</h2>
                    <p> price- {{$value->product_price}}</p>
                    <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}">Add to cart</a></span></div>
                </div>
            </div>
            @endforeach

        </div>  
        <div class="section group">
            <?php
            $product = DB::table('product')->where('manufacturer_id', 7)->limit(1)->get();
            ?>
            @foreach($product as $value)         
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{$value->product_image}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>{{$value->product_model}}</h2>
                    <p> price- {{$value->product_price}}</p>
                    <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}">Add to cart</a></span></div>
                </div>
            </div>
            @endforeach
            <?php
            $product = DB::table('product')->where('manufacturer_id', 11)->limit(1)->get();
            ?>
            @foreach($product as $value)         
            <div class="listview_1_of_2 images_1_of_2">
                <div class="listimg listimg_2_of_1">
                    <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{$value->product_image}}" alt="" /></a>
                </div>
                <div class="text list_2_of_1">
                    <h2>{{$value->product_model}}</h2>
                    <p> price- {{$value->product_price}}</p>
                    <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}">Add to cart</a></span></div>
                </div>
            </div>
            @endforeach

        </div> 
        <div class="clear"></div>
    </div>
    <div class="header_bottom_right_images">
        <!-- FlexSlider -->

        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $all_slider = DB::table('slider')->where('publication_status', 1)->get();
                    ?>
                    @foreach($all_slider as $value)
                    <li><img src="{{URL::to($value->slider_image)}}" alt=""/></li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
    </div>
    <div class="clear"></div>
</div>	

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Feature Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $all_feature = DB::table('product')
                    ->join('category', 'product.category_id', 'category.category_id')
                    ->join('manufacturer', 'product.manufacturer_id', 'manufacturer.manufacturer_id')
                    ->select('product.*', 'category.category_name', 'manufacturer.manufacturer_name')
                    ->where('product.product_featuerd', 1)
                    ->orderBy('product_id', 'desc')
                    ->limit(4)
                    ->get();
            ?>
            @foreach($all_feature as $value)

            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{$value->product_image}}" alt="" /></a>
                <h2>{{$value->manufacturer_name}}</h2>
                <p><span class="price"></span>{{$value->product_price}}</p>

                <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}" class="details">Details</a></span></div>
            </div>
            @endforeach

        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>New Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $all_product = DB::table('product')
                    ->join('category', 'product.category_id', 'category.category_id')
                    ->join('manufacturer', 'product.manufacturer_id', 'manufacturer.manufacturer_id')
                    ->select('product.*', 'category.category_name', 'manufacturer.manufacturer_name')
                    ->where('product.publication_status', 1)
                    ->orderBy('product_id', 'desc')
                    ->limit(4)
                    ->get();
            ?>
            @foreach($all_product as $value)

            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{$value->product_image}}" alt="" /></a>
                <h2>{{$value->manufacturer_name}}</h2>
                <p><span class="price"></span>{{$value->product_price}}</p>
                <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}" class="details">Details</a></span></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection