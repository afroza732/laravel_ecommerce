
@extends('front_End.master')
@section('title')
cart || shop ecommerce
@endsection
@section('main_content')
<div class="main">
    <div class="content">
        <div class="cartoption">		
            <div class="cartpage">
                <h2>Your Cart</h2>
                @php
                $contents = Cart::content();
                @endphp
                <table class="tblone">
                    <tr>
                        <th width="15%">Product Name</th>
                        <th width="20%">Image</th>
                        <th width="15%">Price</th>
                        <th width="25%">Quantity</th>
                        <th width="15%">Total Price</th>
                        <th width="10%">Action</th>
                    </tr>
                    @foreach($contents as $v_contents)
                    <tr>
                        <td>{{$v_contents->name}}</td>
                        <td><img src="{{asset($v_contents->options['image'])}}" alt=""/></td>
                        <td>{{$v_contents->price}}</td>
                        <td>
                            {!! Form::open(array('url'=>'/cart-update','method'=>'post')) !!}
                            <input type="hidden" name="rowId" value="{{$v_contents->rowId}}"/>
                            <input type="number" name="qty" value="{{$v_contents->qty}}"/>
                            <input type="submit" name="submit" value="Update"/>
                            {!! Form::close() !!}
                        </td>
                        <td>{{$v_contents->price*$v_contents->qty}}</td>
                        <td><a href="{{URL::to('/delete-to-cart/'.$v_contents->rowId)}}">X</a></td>
                    </tr>
                    @endforeach 
                </table>
                <table style="float:right;text-align:left;" width="40%">
                    <tr>
                        <th>Sub Total : </th>
                        <td>@php echo Cart::subtotal(); @endphp</td>
                    </tr>
                    <br/>
                    <tr>
                        <th>VAT : </th>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <th>Grand Total :</th>
                        <td>@php echo Cart::total(); @endphp</td>
                    </tr>
                </table>
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
                        <a href="{{URL::to('/shipping-info')}}"> <img src="{{asset('public/frontend_assets/images/check.png')}}" alt="" /></a>
                    <?php } else { ?>
                        <a href="{{URL::to('/checkout')}}"> <img src="{{asset('public/frontend_assets/images/check.png')}}" alt="" /></a>
                    <?php } ?>


                </div>
            </div>  	
            <div class="clear"></div>
        </div>
    </div>
</div>
@endsection