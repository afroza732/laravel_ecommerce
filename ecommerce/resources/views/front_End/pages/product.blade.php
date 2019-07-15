@extends('front_End.master')
<style type="text/css">
    .pagiges{
        height: 65px;
        width: 134px;
        background: red;
    }  
</style>
@section('main_content')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>All Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($published_product_all as $value)

            <div class="grid_1_of_4 images_1_of_4">
                <a href="{{URL::to('/details')}}"> <img src="{{$value->product_image}}" alt="" /></a>
                <h2>{{$value->manufacturer_name}}</h2>
                <p><span class="price"></span>{{$value->product_price}}</p>
                <div class="button"><span><a href="{{URL::to('/details/'.$value->product_id)}}" class="details">Details</a></span></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="pagiges">
    Pages: {{ $published_product_all->links() }} 
</div>
@endsection

