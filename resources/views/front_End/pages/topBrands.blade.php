@extends('front_End.master')
@section('main_content')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Top Brands</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($published_product_all as $value)

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
            @foreach($published_product_all as $value)

            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{URL::to('/preview')}}"> <img src="{{$value->product_image}}" alt="" /></a>
                <h2>{{$value->manufacturer_id}}</h2>
                <p><span class="price"></span>{{$value->product_price}}</p>
                <div class="button"><span><a href="{{$value->product_id}}" class="details">Details</a></span></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div> 
@endsection