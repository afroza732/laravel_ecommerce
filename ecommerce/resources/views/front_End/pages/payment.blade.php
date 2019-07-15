
@extends('front_End.master')
@section('main_content')
@section('title')
payment || shop ecommerce
@endsection

<div class="main">
    <div class="content">
        <div class="cartpage">
            <h3>Payment  Info</h3>      
            {!! Form::open(array('url'=>'/order-place','method'=>'post')) !!}
            <div class="paymentWrap">
                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                    <label class="btn paymentMethod active">
                        <div class="method visa"></div>
                        <input type="radio" name="payment_method" value="handcash" checked> 
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method master-card"></div>
                        <input type="radio" name="payment_method" value="bkash"> 
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method amex"></div>
                        <input type="radio" name="payment_method" value="paypal">
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method vishwa"></div>
                        <input type="radio" name="payment_method" value="payza"> 
                    </label>
                    <input type="submit" class="btn paymentSubmit"  value="Submit"> 
                </div>        
            </div>
            {!! Form::close() !!}
        </div>
    </div>  
    <div class="shopping">
        <div class="shopleft">
            <a href="{{URL::to('/')}}"> <img src="{{asset('public/frontend_assets/images/shop.png')}}" alt="" /></a>
        </div>
        <div class="shopright">
            <?php
            $customer_id = Session::get('customer_id');
            ?>
            <?php if ($customer_id != null) { ?>
                <a href="{{URL::to('/biling-address')}}"> <img src="{{asset('public/frontend_assets/images/check.png')}}" alt="" /></a>
            <?php } else { ?>
                <a href="{{URL::to('/checkout')}}"> <img src="{{asset('public/frontend_assets/images/check.png')}}" alt="" /></a>
            <?php } ?>


        </div>
    </div>  	
    <div class="clear"></div>
</div>
<br/>
<br/>
@endsection