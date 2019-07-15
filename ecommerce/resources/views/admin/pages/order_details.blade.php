@extends('admin.admin_master')
@section('main_content')
<div class="card mb-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card-header  text-center text-primary">
                <h3>Customer Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table " id="" width="50%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$all_order_details->customer_name}}</td>
                                <td>{{$all_order_details->email_address}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-header  text-center text-primary">
                <h3> Shipping Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table " id="" width="50%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$all_order_details->shipping_name}}</td>
                                <td>{{$all_order_details->phone}}</td>
                                <td>{{$all_order_details->email_address}}</td>
                                <td>{{$all_order_details->country}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3 col-md-12">
    <div class="card-header  text-center text-primary">
        <h3> View Order Details</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table " id="" width="50%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$all_order_details->order_id}}</td>
                        <td>{{$all_order_details->product_name}}</td>
                        <td>{{$all_order_details->product_price}}</td>
                        <td>{{$all_order_details->product_sales_quantity}}</td>
                        <td>{{$all_order_details->product_price}}.{{$all_order_details->product_sales_quantity}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection