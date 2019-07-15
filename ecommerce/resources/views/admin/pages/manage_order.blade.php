@extends('admin.admin_master')
@section('main_content')
<div class="card mb-3">
    <div class="card-header  text-center text-primary">
        <h3>Order Details</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Order Status</th>
                        <th>Acton</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_order as $result) { ?>
                        <tr>
                            <td>{{$result->order_id}}</td>
                            <td>{{$result->customer_name}}</td>
                            <td>{{$result->order_total}}</td>
                            <td>{{$result->order_status}}</td>

                            <td>
                                <a href="{{URL::to('/published-category/'.$result->order_id)}}" style="color:#ffffff;" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                                <a href="{{URL::to('/view-order/'.$result->order_id)}}" style="color:#ffffff;" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a href="{{URL::to('/delete-category/'.$result->order_id)}}" style="color:#ffffff;" onclick="return checkDelete();" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection