@extends('front_End.master')
@section('main_content')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading" align='center'>
                <h3>Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($show_product_by_category as $value)

            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{URL::to('/details/'.$value->product_id)}}"> <img src="{{URL::to($value->product_image)}}" alt="" /></a>          
                <p><span class="price"></span>{{$value->product_price}}</p>
                <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}" class="details">Details</a></span></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

