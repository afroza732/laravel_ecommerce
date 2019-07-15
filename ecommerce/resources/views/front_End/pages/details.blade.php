
@extends('front_End.master')
@section('main_content')
@section('title')
{{$product_info->product_model}} || laravel ecommerce
@endsection
<div class="main">
    <div class="content">
        <div class="section group">      
            <div class="cont-desc span_1_of_2">	         
                <div class="grid images_3_of_2">
                    <img src="{{asset($product_info->product_image)}}" height="100px" width="200px" alt="" />
                </div>
                <div class="desc span_3_of_2">
                    <h2></h2>
                    <p></p>					
                    <div class="price">
                        <p>Price: <span>{{$product_info->product_model}}</span></p>
                        <p>Category: <span>{{$product_info->category_name}}</span></p>
                        <p>Brand:    <span>{{$product_info->manufacturer_name}}</span></p>
                        <p>Brand:    <span>{{$product_info->product_price}}</span></p>
                    </div> 
                    <div class="text list_2_of_1">
                    <div class="button"><span><a href="{{URL::to('/add-to-cart/'.$product_info->product_id)}}">Add to cart</a></span></div>
                </div>
                    
                    <!--<div class="add-cart">
                        <form action="" method="post">
                            <input type="number" class="buyfield" name="" value="1"/>
                            <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                        </form>				
                    </div>-->
                </div>
                <div class="product-desc">
                    <h2>Product Details</h2>
                    <p>{{$product_info->product_description}}</p>
                </div>
            </div>
            <div class="rightsidebar span_3_of_1">
                <h2>CATEGORIES</h2>
                <ul>
                    @foreach($all_category as $result)
                    <li><a href="{{URL::to('/show_product_category/'.$result->category_id)}}">{{$result->category_name}}</a></li>
                    @endforeach
                    
                    
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection